<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gejala_model extends CI_Model {

	public function getData(){
		return $this->db->get('tb_gejala');
		result();
	}

	public function insertData($set_users){
		
        $this->db->insert('tb_gejala', $set_users);
	}

	public function updateData($id_gejala){
		$set_gejala = [
                'id_gejala' => $this->input->post('id_gejala'),
                'gejala' => $this->input->post('gejala'),
            ];

            $this->db
                ->where('id_gejala', $id_gejala)
                ->update('tb_gejala', $set_gejala);
	}

	public function deleteData($id_gejala){

        $this->db
            ->where('id_gejala', $id_gejala)
            ->delete('tb_gejala');

	}
}
?>