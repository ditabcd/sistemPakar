<?php
defined('BASEPATH') or exit('No direct script access allowed');

class JenisKulit extends CI_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->model('JenisKulit_model');
        $this->load->helper('form');
    }

    public function index()
    {
        $data['jeniskulit_data'] = $this->JenisKulit_model->getData()->result();
        $this->load->view('admin/jeniskulit/index', $data);
    }

    public function insert()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('jenis_kulit', 'Jenis Kulit', 'trim|required');
       
        if ($this->form_validation->run() == false) {
            $this->load->view('admin/jeniskulit/insert');
        } else {
            $set_users = [
                'id_jeniskulit' => $this->generateNomor(),
                'jenis_kulit' => $this->input->post('jenis_kulit'),
            ];
            $this->JenisKulit_model->insertData($set_users);
            redirect("JenisKulit");
        }
    }

    public function update($id_jeniskulit)
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('jenis_kulit', 'Jenis Kulit', 'trim|required');

        if ($this->form_validation->run() == false) {
            $users_data = $this->db
                ->where('id_jeniskulit', $id_jeniskulit)
                ->get('tb_jeniskulit')
                ->row(0);
            $data['jenis_kulit_data'] = $users_data;
            $this->load->view('admin/jeniskulit/update', $data);
        } else {
            $this->JenisKulit_model->updateData($id_jeniskulit);
            redirect('JenisKulit');
        }
    }

    public function delete($id_jeniskulit)
    {
        $this->JenisKulit_model->deleteData($id_jeniskulit);
        redirect("JenisKulit");
    }

    public function generateNomor()
    {
        $last_row = $this->db
        ->order_by('id_jeniskulit', 'desc')
        ->get('tb_jeniskulit')->row(0);

        if ($last_row == null) {
            $last_kode = "000";
            $last_kode = (int) $last_kode;
            $last_kode++;
            $last_kode = substr("000" . $last_kode, -3);
            $new_kode = "J".$last_kode;
        } else {
            $last_kode = substr($last_row->id_jeniskulit, -3);
            $last_kode = (int) $last_kode;
            $last_kode++;
            $last_kode = substr("000" . $last_kode, -3);
            $new_kode = "J".$last_kode;
        }
        return $new_kode;
    }
}
