<?php
defined('BASEPATH') or exit('No direct script access allowed');

class History extends CI_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->model('History_model');
        $this->load->helper('form');
    }

    public function history($id_user)
    {
        $data['history_data'] = $this->History_model->getHistory($id_user)->result();
        $this->load->view('home/history/history', $data);
    }
}