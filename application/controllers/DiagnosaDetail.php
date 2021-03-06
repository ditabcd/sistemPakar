<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DiagnosaDetail extends CI_Controller
{
	public function nbc($id_diagnosa)
	{
		$start = microtime(true);
		//get data from detail diagnosa
		$data_uji = [];
		foreach ($this->db->where('fk_diagnosa', $id_diagnosa)->get('tb_detail_diagnosa')->result() as $key => $value) {
			$data_uji[] = $value->nilai;
		}

		// echo "<pre>";
		// var_dump($data_uji);

		//get data training from db
		$data_training = [];
		foreach ($this->db->get('tb_training')->result() as $key => $value) {
			$data_detail = [];
			foreach ($this->db->where('fk_training', $value->id_training)->get('tb_detail_training')->result() as $k => $v) {
				$data_detail[] = $v->nilai;
			}

			$data_training[] = (object) [
				'id_pasien' => $value->id_pasien,
				'jenis_kulit' => $value->jenis_kulit,
				'detail' => $data_detail,
			];
		}

		//langkah 1->mencari prior
		$data_jeniskulit = [];
		foreach ($data_training as $key => $value) {
			$data_jeniskulit[] = $value->jenis_kulit;
		} //melihat ada jenis kulit apa saja pada data training

		$count_jeniskulit = array_count_values($data_jeniskulit); //menghitung jumlah masing-masing jenis kulit

		$sum_all_jeniskulit = array_sum($count_jeniskulit); //mencari jumlah keseluruhan jenis kulit
		$prior = [];
		foreach ($count_jeniskulit as $key => $value) {
			$prior[$key] = $value / $sum_all_jeniskulit;
		}

		// echo "<pre>prior<br>";
		// var_dump($prior);
		//mencari prior dengan membagi jumlah masing-masing jenis kulit dengan jumlah keseluruhan jenis kulit

		//langkah2->likelihood
		$data_per_jeniskulit = [];
		foreach ($data_training as $key => $value) {
			$data_per_jeniskulit[$value->jenis_kulit][] = $value->detail;
		} //menghitung jumlah jenis kulit

		//var_dump($data_per_jeniskulit);
		// var_dump();
		$countjk = $this->db->get('tb_jeniskulit')->num_rows();

		$data_likelihood = [];
		foreach ($data_per_jeniskulit as $key => $value) {
			$count_per_gejala = []; //memasukkan gejala ke dlm array
			foreach ($data_uji as $k => $v) {
				$count_per_gejala[$k] = 0+1;
			} //menghitung banyaknya gejala 
			foreach ($value as $k => $v) {
				foreach ($v as $key_gejala => $value_gejala) {
					if ($value_gejala == $data_uji[$key_gejala]) {
						$count_per_gejala[$key_gejala]++;
					}
				}
			} 
			//menghitung gejala yang diinputkan
			// echo "count per gejala<br>";
			// var_dump($count_per_gejala);

			$likelihood = [];
			foreach ($count_per_gejala as $k => $v) {
				$likelihood[$k] = $v / (($count_jeniskulit[$key])+($countjk));
			}

			$keyJ[] = $key;
			$data_likelihood[$key] = $likelihood;
		}

		// for($i=0; $j<count($data_likelihood); $i++) {
		// 	for($j=0; $j<count($data_likelihood[$keyJ[$i]]); $j++){
		// 		echo $data_likelihood[$keyJ[$i][$j]];
		// 	}
		// ?
		// echo "<pre>";
		// echo "likelihood<br>";
		// var_dump($keyJ[0]);
		// var_dump($data_likelihood[$keyJ[0]]);
		//echo "<br>likelihood<br>";
		// var_dump($data_likelihood[$keyJ[1]]);
		// echo "<br>likelihood<br>";
		// var_dump($data_likelihood[$keyJ[2]]);
		// echo "<br>likelihood<br>";
		// var_dump($data_likelihood[$keyJ[3]]);
		// echo "<br>likelihood<br>";
		// var_dump($data_likelihood[$keyJ[4]]);

		//langkah3->posterior
		$posterior = [];
		foreach ($data_likelihood as $key => $value) {
			$posterior[$key] = array_product($value) * $prior[$key];
		}
		$time_lapsed_secs = microtime(true) - $start;

		$max = max($posterior);
		$hasil = array_keys($posterior, $max)[0];

		//echo "<pre>";
		// var_dump($hasil);
		// var_dump($prior);
		// var_dump($likelihood);
		// var_dump($posterior);

		$db_jeniskulit = $this->db->where('id_jeniskulit', $hasil)->get('tb_jeniskulit')->row(0);

		$this->db->where('id_diagnosa', $id_diagnosa)->update('tb_diagnosa', ['hasil_diagnosa_nbc' => $max, "fk_jeniskulit" => $hasil]);
		$view_data['id_diagnosa'] = $id_diagnosa;
		$view_data['hasil'] = $hasil;
		$view_data['prior'] = $prior;
		$view_data['likelihood'] = $likelihood;
		$view_data['data_likelihood'] = $data_likelihood;
		$view_data['keyJ1'] = $keyJ[0];
		$view_data['keyJ2'] = $keyJ[1];
		$view_data['keyJ3'] = $keyJ[2];
		$view_data['keyJ4'] = $keyJ[3];
		$view_data['keyJ5'] = $keyJ[4];
		$view_data['data_likelihood1'] = $data_likelihood[$keyJ[0]];
		$view_data['data_likelihood2'] = $data_likelihood[$keyJ[1]];
		$view_data['data_likelihood3'] = $data_likelihood[$keyJ[2]];
		$view_data['data_likelihood4'] = $data_likelihood[$keyJ[3]];
		$view_data['data_likelihood5'] = $data_likelihood[$keyJ[4]];
		$view_data['max'] = $max;
		$view_data['posterior'] = $posterior;
		$view_data['jenis_kulit'] = $db_jeniskulit;
		$view_data['gejala'] = $this->db->get('tb_gejala')->result();
		$view_data['jk'] = $this->db->get('tb_jeniskulit')->result();

		$this->load->view('admin/dashboard/detail_diagnosa', $view_data);
		//engkok ndek view ne manggil e $hasil
	}

	public function backward_action()
	{
		$set = [
			'fk_diagnosa' => $this->input->post('id_diagnosa'),
			'fk_jeniskulit' => $this->input->post('fk_jeniskulit'),
		];

		$this->db->insert('tb_diagnosa_bc', $set);

		$id = $this->db->insert_id();
		foreach ($this->input->post('diagnosa') as $key => $value) {
			$set_detail = [
				'fk_diagnosa_bc' => $id,
				'fk_gejala' => $key,
				'nilai' => $value,
			];

			$this->db->insert('tb_detail_diagnosa_bc', $set_detail);
		}

		redirect("DiagnosaUser/backwardChaining/" . $id);
	}

	public function backwardChaining($id_diagnosa_bc)
	{

		$db_rule = $this->db->get('tb_rule')->result();
		$rule = [];
		foreach ($db_rule as $key => $value) {
			$rule[] = [
				'condition' => explode(",", $value->kondisi),
				'then' => $value->hasil,
			];
		} //mengambil rule dari db, explode=menghilangkan koma


		$db_diagnosa_bc = $this->db->where('id_diagnosa_bc',$id_diagnosa_bc)->get('tb_diagnosa_bc')->row(0);
		$db_diagnosa_bc_detail = $this->db->where('fk_diagnosa_bc',$id_diagnosa_bc)->get('tb_detail_diagnosa_bc')->result();
		#inputan
		// $input = ['G003', 'G006', 'G007', 'G011', 'G013', 'G016', 'G017', 'G018', 'G019'];
		// $z = "J005";

		$input = [];
		foreach($db_diagnosa_bc_detail as $key => $value){
			$input[] = $value->fk_gejala;
		}
		$z = $db_diagnosa_bc->fk_jeniskulit;

		$result = false;
		$database = $input;
		$stack = [];
		$stack[] = $z; //mengisi stack dg hasil yg diinginkan
		$i = 0;
		do {
			$new_iterasi = false;
			foreach ($rule as $key => $value) {
				if (count(array_diff($value['condition'], $database)) === 0) {
					unset($rule[$key]);

					foreach ($stack as $k => $v) {
						if ($v == $value['then'])
							unset($stack[$k]);
					}

					$database[] = $value['then'];
					$new_iterasi = true;
					echo "<BR>ITTER-" . $i . " RULE" . $key . " TRUE";
					echo "<BR>DATABASE : " . implode(",", $database);
					echo "<BR>";
					echo "STACK : " . implode(",", $stack);
					echo "<HR>";
					break;
				} else {
					$add_to_stack = array_diff($value['condition'], $database);
					$stack = array_merge($stack, $add_to_stack);
					$stack = array_unique($stack);
					echo "<BR>ITTER-" . $i . " RULE" . $key . " FALSE";
					echo "<BR>DATABASE : " . implode(",", $database);
					echo "<BR>";
					echo "STACK : " . implode(",", $stack);
					echo "<HR>";
				}
			}
			if (!$new_iterasi) {
				//$result = false;
				$result = 0;
				break;
			}
			if (!in_array($z, $stack)) {
				//$result = true;
				$result = 1;
				break;
			}
			$i++;
		} while (true);
		echo "RESULT :";
		var_dump($result);

		$this->db->where('id_diagnosa_bc', $id_diagnosa_bc)->update('tb_diagnosa_bc', ["hasil"=>$result]);
	}
}
