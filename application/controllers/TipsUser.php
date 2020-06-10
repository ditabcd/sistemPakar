<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TipsUser extends CI_Controller {

	public function index()
	{
		$this->load->model('Tips_model');
		$data['tips_data'] = $this->Tips_model->getData()->result();
		$this->load->view('home/tips/tips', $data);
	}
}
