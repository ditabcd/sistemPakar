<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('Dashboard_model');
        $this->load->helper('form');
    }

    public function index(){
        $data['dashboard_data'] = $this->Dashboard_model->getData()->result();
        $this->load->view('admin/dashboard/index', $data);
    }

    public function delete($id_diagnosa){
        $this->Dashboard_model->deleteData($id_diagnosa);

        redirect("Dashboard");
    }
     
}
