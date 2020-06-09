<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Diagnosa extends CI_Controller {

	public function index()
	{
		$data['gejala'] = $this->db->get('tb_gejala')->result();
		$this->load->view('admin/diagnosa/index',$data);
	}

	public function insert_diagnosa()
	{

		$gejala = $this->db->get('tb_gejala')->result();

		$set = [
			'tanggal' => date("Y-m-d")
		];
		$data_diagnosa = $this->db->insert('tb_diagnosa',$set);

		$id_diagnosa = $this->db->insert_id();

		$diagnosa = $this->input->post('diagnosa');
		
		/*foreach ($gejala as $key => $value) {
			$nilai = 0;

			if(isset($diagnosa[$value->id_gejala])){
				if($diagnosa[$value->id_gejala1] == "on"){
					$nilai = 3;
				}elseif($diagnosa[$value->id_gejala2] == "on"){
					$nilai = 2;
				}elseif($diagnosa[$value->id_gejala3] == "on"){
					$nilai = 3;
				}
			}*/
			
			$set = [
				'fk_diagnosa' => $id_diagnosa,
				'fk_gejala' => $value->id_gejala,
				'nilai' => $nilai
			];
				$this->db->insert('tb_detail_diagnosa',$set);
			
		}

		redirect("Diagnosa/check/".$id_diagnosa);
	}

	public function check($id_diagnosa)
	{
		$data_detail_diagnosa = $this->db->where('fk_diagnosa',$id_diagnosa)->where('nilai',1)->get('tb_detail_diagnosa')->result();
		$list_jeniskulit = $this->db->get('tb_jeniskulit')->result();

		$n = 1;
		$p = 1/$this->db->get('tb_jeniskulit')->num_rows();
		$m = $this->db->get('tb_gejala')->num_rows();

		$arr_jeniskulit = [];
		foreach ($list_jeniskulit as $jeniskulit) {

			foreach ($data_detail_diagnosa as $k => $v) {
				$data_keputusan = $this->db->where('fk_gejala',$v->fk_gejala)->where('fk_jeniskulit',$jeniskulit->id_jeniskulit)->get('tb_keputusan')->row(0);
				$arr_jeniskulit[$jeniskulit->id_jeniskulit][$v->fk_gejala] = $data_keputusan->nilai;
			}

		}

		$arr_p = [];
		foreach ($list_jeniskulit as $jeniskulit) {

			foreach ($data_detail_diagnosa as $k => $v) {
				$arr_p[$jeniskulit->id_jeniskulit][$v->fk_gejala] = ($arr_jeniskulit[$jeniskulit->id_jeniskulit][$v->fk_gejala]+($m*$p))/($n+$m);
			}

		}

		$arr_result = [];
		foreach ($list_jeniskulit as $jeniskulit) {
			$result = 1;
			foreach ($data_detail_diagnosa as $k => $v) {
				$result *= $arr_p[$jeniskulit->id_jeniskulit][$v->fk_gejala];
			}
			$arr_result[$jeniskulit->id_jeniskulit] = $result*$p;

		}

		$id_jeniskulit = array_keys($arr_result, max($arr_result))[0];
		echo "<pre>";
		var_dump($id_jeniskulit);
		echo "</pre>";
	}
}
