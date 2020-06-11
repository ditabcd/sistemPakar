<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tips extends CI_Controller
{

    function __construct() {
        parent::__construct();
        $this->load->model('Tips_model');
        $this->load->helper('form');
    }

    public function index()
    {
        $data['tips_data'] = $this->Tips_model->getData()->result();
        $this->load->view('admin/tips/index', $data);
    }

    public function insert()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('id_tips', 'id_tips', 'trim|required');
        $this->form_validation->set_rules('id_jeniskulit', 'id_jeniskulit', 'trim|required');
        $this->form_validation->set_rules('deskripsi_tips', 'deskripsi_tips', 'trim|required');

        $data['jk_data']=$this->Tips_model->getJenisKulit()->result();

       
        if ($this->form_validation->run() == false) {
            $this->load->view('admin/tips/insert');
        } else {
            $this->Tips_model->insertData();
            redirect("Tips");
        }
    }

    public function update($id_tips)
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('id_tips', 'id_tips', 'trim|required');
        $this->form_validation->set_rules('id_jeniskulit', 'id_jeniskulit', 'trim|required');
        $this->form_validation->set_rules('deskripsi_tips', 'deskripsi_tips', 'trim|required');

        if ($this->form_validation->run() == false) {
            $users_data = $this->db
                ->where('id_tips', $id_tips)
                ->get('tb_tips')
                ->row(0);
            $data['tips_data'] = $users_data;
            $this->load->view('admin/tips/update', $data);
        } else {
            
            $this->Tips_model->updateData($id_tips);

            redirect('Tips');
        }
    }

    public function delete($id_tips)
    {

        $this->Tips_model->deleteData($id_tips);

        redirect("Tips");
    }
}
