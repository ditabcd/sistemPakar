<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class History_model extends CI_Model {

	public function getHistory($id_user){
		return $this->db
		->select('*')
		->where('id_user', $id_user)
		->limit(1)
		->get('tb_diagnosa');

		result;
	}
}