<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DataLatih extends CI_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->helper('form');
    }

    public function index()
    {
        $data['gejala'] = $this->db->get('tb_gejala')->result();
        //$data['datalatih'] = $this->db->get('tb_training')->result();
        $this->load->view('admin/datalatih/index', $data);
    }

    public function daftarData()
    {
        $data['datalatih'] = $this->db->get('tb_training')->result();
        $this->load->view('admin/datalatih/daftarData', $data);
    }

    public function insert()
    {
        $gejala = $this->db->get('tb_gejala')->result();

        $set = [
            'id_pasien' => $this->input->post('id_pasien'),
            'jenis_kulit' => $this->input->post('jenis_kulit'),
        ];

        $data_training = $this->db->insert('tb_training', $set);

        $id_training = $this->db->insert_id();

        $training = $this->input->post('training');

        foreach ($training as $key => $value) {

            $set = [
                'fk_training' => $id_training,
                'fk_gejala' => $key,
                'nilai' => $value
            ];
            $this->db->insert('tb_detail_training', $set);
        }

        redirect("DataLatih");
    }

    public function update($id_training)
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('jenis_kulit', 'Jenis Kulit', 'trim|required');

        if ($this->form_validation->run() == false) {
            $users_data = $this->db
                ->where('id_training', $id_training)
                ->get('tb_training')
                ->row(0);
            $data['data_latih_data'] = $users_data;
            $this->load->view('admin/datalatih/update', $data);
        } else {
            $this->DataLatih_model->updateData($id_training);
            redirect('DataLatih');
        }
    }

    public function delete($id_training)
    {
        $this->db
            ->where('id_training', $id_training)
            ->delete('tb_training');
        redirect("DataLatih/daftarData");
    }

    public function generateNomor()
    {
        $last_row = $this->db
        ->order_by('id_pasien', 'desc')
        ->get('tb_training')->row(0);

        if ($last_row == null) {
            $last_kode = "0";
            $last_kode = (int) $last_kode;
            $last_kode++;
            $last_kode = substr("0" . $last_kode, -1);
            $new_kode = "P".$last_kode;
        } else {
            $last_kode = substr($last_row->id_jeniskulit, -1);
            $last_kode = (int) $last_kode;
            $last_kode++;
            $last_kode = substr("000" . $last_kode, -1);
            $new_kode = "P".$last_kode;
        }
        return $new_kode;
    }
}
