<?php
defined('BASEPATH') or exit('No direct script access allowed');

class JenisKulit extends CI_Controller
{

    public function index()
    {
        $data['jeniskulit_data'] = $this->db
            ->get('tb_jeniskulit')
            ->result();
        $this->load->view('admin/jeniskulit/index', $data);
    }

    public function insert()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('id_jeniskulit', 'id jenis kulit', 'trim|required');
        $this->form_validation->set_rules('jenis_kulit', 'jenis kulit', 'trim|required');
       
        if ($this->form_validation->run() == false) {
            $this->load->view('admin/jeniskulit/insert');
        } else {
            $set_users = [
                'id_jeniskulit' => $this->input->post('id_jeniskulit'),
                'jenis_kulit' => $this->input->post('jenis_kulit'),
            ];
            $this->db->insert('tb_jeniskulit', $set_users);

            redirect("JenisKulit");
        }
    }

    public function update($id_jeniskulit)
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('id_jeniskulit', 'id_jeniskulit', 'trim|required');
    

        if ($this->form_validation->run() == false) {
            $users_data = $this->db
                ->where('id_jeniskulit', $id_jeniskulit)
                ->get('tb_jeniskulit')
                ->row(0);
            $data['jenis_kulit_data'] = $users_data;
            $this->load->view('admin/jeniskulit/update', $data);
        } else {
            $set_jeniskulit = [
                'id_jeniskulit' => $this->input->post('id_jeniskulit'),
                'jenis_kulit' => $this->input->post('jenis_kulit'),
            ];

            $this->db
                ->where('id_jeniskulit', $id_jeniskulit)
                ->update('tb_jeniskulit', $set_jeniskulit);

            redirect('JenisKulit');
        }
    }

    public function delete($id_jeniskulit)
    {

        $this->db
            ->where('id_jeniskulit', $id_jeniskulit)
            ->delete('tb_jeniskulit');

        redirect("JenisKulit");
    }

    // public function generate_nomer()
    // {
    //     $last_row = $this->db
    //     ->order_by('id_jeniskulit', 'desc')
    //     ->get('tb_jeniskulit')->row(0);

    //     if ($last_row == null) {
    //         $last_kode = "000";
    //         $last_kode = (int) $last_kode;
    //         $last_kode++;
    //         $last_kode = substr("000" . $last_kode, -3);
    //         $new_kode = "JK".$last_kode;
    //     } else {
    //         $last_kode = substr($last_row->id_jeniskulit, -4);
    //         $last_kode = (int) $last_kode;
    //         $last_kode++;
    //         $last_kode = substr("000" . $last_kode, -3);
    //         $new_kode = "JK".$last_kode;
    //     }
    //     return $new_kode;
    // }
}
