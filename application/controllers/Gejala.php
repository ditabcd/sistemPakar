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

        $this->form_validation->set_rules('id_gejala', 'id_gejala', 'trim|required');
        $this->form_validation->set_rules('gejala', 'Gejala', 'trim|required');
       
        if ($this->form_validation->run() == false) {
            $this->load->view('admin/gejala/insert');
        } else {
            $this->Gejala_model->insertData();
            redirect("Gejala");
        }
    }

    public function update($id_gejala)
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('id_gejala', 'id_gejala', 'trim|required');
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
}
