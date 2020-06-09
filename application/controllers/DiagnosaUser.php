<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DiagnosaUser extends CI_Controller {

	public function index()
	{
		$data['gejala']=$this->db->get('tb_gejala')->result();
		$this->load->view('home/diagnosa/diagnosa',$data);
	}

	public function insert_diagnosa()
	{
		$gejala=$this->db->get('tb_gejala')->result();

		$set=[
			'tanggal'=>date("Y-m-d"),
			'id_user'=>$this->session->userdata('id_user')
		];

		$data_diagnosa=$this->db->insert('tb_diagnosa', $set);

		$id_diagnosa=$this->db->insert_id();

		$diagnosa=$this->input->post('diagnosa');

		foreach ($diagnosa as $key => $value) {

			$set = [
				'fk_diagnosa' => $id_diagnosa,
				'fk_gejala' => $key,
				'nilai' => $value
			];
			$this->db->insert('tb_detail_diagnosa', $set);
		}

		redirect("DiagnosaUser/nbc/".$id_diagnosa);
	}

	public function nbc($id_diagnosa)
	{
		$start=microtime(true);

		//get data 
		//$data_uji =[2,2,3,2,2,1,3,3,1,2,1,2,3,1,1,1,1,2,2];
		$data_uji=[];
		foreach ($this->db->where('fk_diagnosa', $id_diagnosa)->get('tb_detail_diagnosa')->result() as $key => $value) {
			$data_uji[] = $value->nilai;
		} //ambil data
		// $data_uji=$this->db->select('nilai')->where('fk_diagnosa',31)->get('tb_detail_diagnosa')->result();

		echo "<pre>";
		var_dump($data_uji);

		//get data training form db
		$data_training = [];
		foreach ($this->db->get('tb_training')->result() as $key => $value) {
			$data_detail = [];
			foreach ($this->db->where('fk_training', $value->id_training)->get('tb_detail_training')->result() as $k => $v) {
				$data_detail[] = $v->fk_nilai;
			}

			$data_training[]=(object)[
				'id_pasien'=>$value->id_pasien,
				'jenis_kulit'=>$value->jenis_kulit,
				'detail'=>$data_detail,
			];
		}

		//langkah 1->mencari prior
		$data_jeniskulit=[];
		foreach ($data_training as $key => $value) {
			$data_jeniskulit[]=$value->jenis_kulit;
		} //melihat ada jenis kulit apa saja pada data training

		$count_jeniskulit=array_count_values($data_jeniskulit); //menghitung jumlah masing-masing jenis kulit

		$sum_all_jeniskulit=array_sum($count_jeniskulit); //mencari jumlah keseluruhan jenis kulit
		$prior = [];
		foreach ($count_jeniskulit as $key => $value) {
			$prior[$key] = $value / $sum_all_jeniskulit;
		}
		echo "<pre>prior<br>";
		var_dump($prior);
		//mencari prior dengan membagi jumlah masing-masing jenis kulit dengan jumlah keseluruhan jenis kulit

		//langkah2->likelihood
		$data_per_jeniskulit=[];
		foreach ($data_training as $key => $value) {
			$data_per_jeniskulit[$value->jenis_kulit][] = $value->detail;
		} //menghitung jumlah jenis kulit

		$data_likelihood=[];
		foreach ($data_per_jeniskulit as $key => $value) {
			$count_per_gejala=[]; //memasukkan gejala ke dlm array
			foreach ($data_uji as $k => $v) {
				$count_per_gejala[$k]=0;
			} //menghitung banyaknya gejala 
			foreach ($value as $k => $v) {
				foreach ($v as $key_gejala => $value_gejala) {
					if ($value_gejala==$data_uji[$key_gejala]) {
						$count_per_gejala[$key_gejala]++;
					}
				}
			} //menghitung gejala yang diinputkan
			echo "count per gejala<br>";
			var_dump($count_per_gejala);

			$likelihood=[];
			foreach ($count_per_gejala as $k => $v) {
				$likelihood[$k]=$v/$count_jeniskulit[$key];
			}

			$data_likelihood[$key]=$likelihood;
		}
		echo "<pre>";
		echo "likelihood<br>";
		var_dump($likelihood);

		//langkah3->posterior
		$posterior=[];
		foreach ($data_likelihood as $key => $value) {
			$posterior[$key]=array_product($value)*$prior[$key];
		}

		$time_lapsed_secs=microtime(true) - $start;

		echo "<pre>hasil posterior<br>";
		var_dump($posterior);
		die();
	}

	public function hasilDiagnosaNbc()
	{
		$this->load->view('home/hasil_diagnosa/hasil_diagnosa');
		
		$data=$this->db->get('tb_diagnosa');
		return $data->result();

		$data['graph']=$this->tb_diagnosa->graph();

	}
}
