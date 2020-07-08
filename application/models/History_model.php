<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class History_model extends CI_Model {

	public function getHistory($id_user){
		return $this->db
		->select('*')
		->join('tb_jeniskulit', 'fk_jeniskulit=id_jeniskulit')
		->where('id_user', $id_user)
		->get('tb_diagnosa');
	}
}