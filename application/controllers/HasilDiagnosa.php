<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class HasilDiagnosa extends CI_Controller {

	public function index()
	{
		$this->load->view('home/hasil_diagnosa/hasil_diagnosa');
	}


}

?>