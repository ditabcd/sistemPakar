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
        if($this->session->userdata('id_level')==1){
            $data['tips_data'] = $this->Tips_model->getData()->result();
            $this->load->view('admin/tips/index', $data);
        }else {
             $this->load->model('Tips_model');
            $data['tips_data'] = $this->Tips_model->getData()->result();
            $this->load->view('home/tips/tips', $data);
        }
    }

    // public function index_user()
    // {
    //     $this->load->model('Tips_model');
    //     $data['tips_data'] = $this->Tips_model->getData()->result();
    //     $this->load->view('home/tips/tips', $data);
    // } 

    public function insert()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('id_jeniskulit', 'id_jeniskulit', 'trim|required');
        $this->form_validation->set_rules('deskripsi_tips', 'deskripsi_tips', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/tips/insert');
        } else {
            $set_users = [
                'id_tips' => $this->generateNomor(),
                'id_jeniskulit' => $this->input->post('id_jeniskulit'),
                'deskripsi_tips' => $this->input->post('deskripsi_tips'),
            ];
            $this->Tips_model->insertData($set_users);
            redirect("Tips");
        }
    }

    public function update($id_tips)
    {
        $this->load->library('form_validation');
        
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

    public function generateNomor()
    {
        $last_row = $this->db
        ->order_by('id_tips', 'desc')
        ->get('tb_tips')->row(0);

        if ($last_row == null) {
            $last_kode = "000";
            $last_kode = (int) $last_kode;
            $last_kode++;
            $last_kode = substr("000" . $last_kode, -3);
            $new_kode = "T".$last_kode;
        } else {
            $last_kode = substr($last_row->id_tips, -3);
            $last_kode = (int) $last_kode;
            $last_kode++;
            $last_kode = substr("000" . $last_kode, -3);
            $new_kode = "T".$last_kode;
        }
        return $new_kode;
    }
}
