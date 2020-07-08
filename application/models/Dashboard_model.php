<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

	public function getData(){
		return $this->db->get('tb_diagnosa');
		result();
	}

	public function deleteData($id_diagnosa){

        $this->db
            ->where('id_diagnosa', $id_diagnosa)
            ->delete('tb_diagnosa');

	}
}
?>