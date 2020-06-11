<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JenisKulit_model extends CI_Model {

	public function getData(){
		return $this->db->get('tb_jeniskulit');
		result();
	}

	public function insertData(){
		$set_users = [
                'id_jeniskulit' => $this->input->post('id_jeniskulit'),
                'jenis_kulit' => $this->input->post('jenis_kulit'),
            ];
            $this->db->insert('tb_jeniskulit', $set_users);
	}

	public function updateData($id_jeniskulit){
		$set_jeniskulit = [
                'id_jeniskulit' => $this->input->post('id_jeniskulit'),
                'jenis_kulit' => $this->input->post('jenis_kulit'),
            ];

            $this->db
                ->where('id_jeniskulit', $id_jeniskulit)
                ->update('tb_jeniskulit', $set_jeniskulit);
	}

	public function deleteData($id_jeniskulit){

		    $this->db
            ->where('id_jeniskulit', $id_jeniskulit)
            ->delete('tb_jeniskulit');

	}
}
?>