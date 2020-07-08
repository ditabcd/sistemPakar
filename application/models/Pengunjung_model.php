<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengunjung_model extends CI_Model {

	public function getData(){
		return $this->db
		->select('*')
		->where('id_level', 2)
		->get('tb_user');
		result();
	}

	public function updateData($id_user){
		$set_user = [
                'id_user' => $this->input->post('id_user'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'id_level' => 2,
            ];

            $this->db
                ->where('id_user', $id_user)
                ->update('tb_user', $set_user);
	}

	public function deleteData($id_user){

        $this->db
            ->where('id_user', $id_user)
            ->delete('tb_user');

	}
}
?>