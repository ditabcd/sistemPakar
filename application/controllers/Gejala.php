<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gejala extends CI_Controller
{


    public function index()
    {
        $data['gejala_data'] = $this->db
            ->get('tb_gejala')
            ->result();
        $this->load->view('admin/gejala/index', $data);
    }

    public function insert()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('id_gejala', 'id_gejala', 'trim|required');
       
        if ($this->form_validation->run() == false) {
            $this->load->view('admin/gejala/insert');
        } else {
            $set_users = [
                'id_gejala' => $this->input->post('id_gejala'),
                'gejala' => $this->input->post('gejala'),
            ];
            $this->db->insert('tb_gejala', $set_users);

            redirect("Gejala");
        }
    }

    public function update($id_gejala)
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('id_gejala', 'id_gejala', 'trim|required');
    

        if ($this->form_validation->run() == false) {
            $users_data = $this->db
                ->where('id_gejala', $id_gejala)
                ->get('tb_gejala')
                ->row(0);
            $data['gejala_data'] = $users_data;
            $this->load->view('admin/gejala/update', $data);
        } else {
            $set_gejala = [
                'id_gejala' => $this->input->post('id_gejala'),
                'gejala' => $this->input->post('gejala'),
            ];

            $this->db
                ->where('id_gejala', $id_gejala)
                ->update('tb_gejala', $set_gejala);

            redirect('Gejala');
        }
    }

    public function delete($id_gejala)
    {

        $this->db
            ->where('id_gejala', $id_gejala)
            ->delete('tb_gejala');

        redirect("Gejala");
    }
}
