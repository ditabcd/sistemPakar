<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gejala extends CI_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->model('Gejala_model');
        $this->load->helper('form');
    }

    public function index()
    {
        $data['gejala_data'] = $this->Gejala_model->getData()->result();
        $this->load->view('admin/gejala/index', $data);
    }

    public function insert()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('gejala', 'Gejala', 'trim|required');
       
        if ($this->form_validation->run() == false) {
            $this->load->view('admin/gejala/insert');
        } else {
        $set_users = [
                'id_gejala' => $this->generate_nomer(),
                'gejala' => $this->input->post('gejala'),
            ];
            $this->Gejala_model->insertData($set_users);
            redirect("Gejala");
        }
    }

    public function update($id_gejala)
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('gejala', 'gejala', 'trim|required');
    

        if ($this->form_validation->run() == false) {
            $users_data = $this->db
                ->where('id_gejala', $id_gejala)
                ->get('tb_gejala')
                ->row(0);
            $data['gejala_data'] = $users_data;
            $this->load->view('admin/gejala/update', $data);
        } else {
            
            $this->Gejala_model->updateData($id_gejala);

            redirect('Gejala');
        }
    }

    public function delete($id_gejala)
    {
        $this->Gejala_model->deleteData($id_gejala);

        redirect("Gejala");
    }

    public function generate_nomer()
    {
        $last_row = $this->db
        ->order_by('id_gejala', 'desc')
        ->get('tb_gejala')->row(0);

        if ($last_row == null) {
            $last_kode = "000";
            $last_kode = (int) $last_kode;
            $last_kode++;
            $last_kode = substr("000" . $last_kode, -3);
            $new_kode = "G".$last_kode;
        } else {
            $last_kode = substr($last_row->id_gejala, -3);
            $last_kode = (int) $last_kode;
            $last_kode++;
            $last_kode = substr("000" . $last_kode, -3);
            $new_kode = "G".$last_kode;
        }
        return $new_kode;
    }
}
