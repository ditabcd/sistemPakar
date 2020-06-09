<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keputusan extends CI_Controller {

	public function index()
	{
		$data['gejala'] = $this->db->get('tb_gejala')->result();
		$data['jeniskulit'] = $this->db->get('tb_jeniskulit')->result();
		$this->load->view('admin/keputusan/index',$data);
	}

	public function update_keputusan()
	{
		$gejala = $this->db->get('tb_gejala')->result();
		$jeniskulit = $this->db->get('tb_jeniskulit')->result();


		$keputusan = $this->input->post('keputusan');
		foreach ($gejala as $key => $value) {
			foreach ($jeniskulit as $k => $v) {
				$nilai = 0;
				if(isset($keputusan[$value->id_gejala][$v->id_jeniskulit])){
					if($keputusan[$value->id_gejala][$v->id_jeniskulit] == "on"){
						$nilai = 1;
					}else{
						$nilai = 0;
					}
				}
					$set = [
						'fk_gejala' => $value->id_gejala,
						'fk_jeniskulit' => $v->id_jeniskulit,
						'nilai' => $nilai
					];
					$data_keputusan = $this->db->where('fk_gejala',$value->id_gejala)->where('fk_jeniskulit',$v->id_jeniskulit)->get('tb_keputusan')->row(0);
					// die($this->db->last_query());
					if($data_keputusan == null){
						$this->db->insert('tb_keputusan',$set);
					}else{
						$this->db->where('fk_gejala',$value->id_gejala)->where('fk_jeniskulit',$v->id_jeniskulit)->update('tb_keputusan',$set);
					}	
			}
		}

		redirect("Keputusan");
	}
}
