<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tips_model extends CI_Model {

	public function getData(){
		return $this->db->get('tb_tips');
		result();
	}

	public function insertData($set_users){
        $this->db->insert('tb_tips', $set_users);
	}

	public function updateData($id_tips){

		$set_tips = [
                'id_tips' => $this->input->post('id_tips'),
                'id_jeniskulit' => $this->input->post('id_jeniskulit'),
                'deskripsi_tips' => $this->input->post('deskripsi_tips'),
            ];
        $this->db
        	 ->where('id_tips', $id_tips)
             ->update('tb_tips', $set_tips);
	}

	public function deleteData($id_tips){
		$this->db
			 ->where('id_tips', $id_tips)
			 ->delete('tb_tips');
	}
}