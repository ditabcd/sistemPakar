<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengunjung extends CI_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->model('Pengunjung_model');
        $this->load->helper('form');
    }

    public function index()
    {
        $data['user_data'] = $this->Pengunjung_model->getData()->result();
        $this->load->view('admin/pengunjung/index', $data);
    }

    public function update($id_user)
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'username', 'trim|required');
        $this->form_validation->set_rules('password', 'password', 'trim|required');
    

        if ($this->form_validation->run() == false) {
            $users_data = $this->db
                ->where('id_user', $id_user)
                ->get('tb_user')
                ->row(0);
            $data['user_data'] = $users_data;
            $this->load->view('admin/pengunjung/update', $data);
        } else {
            
            $this->Pengunjung_model->updateData($id_user);

            redirect('Pengunjung');
        }
    }

    public function delete($id_user)
    {
        $this->Pengunjung_model->deleteData($id_user);

        redirect("Pengunjung");
    }

}

