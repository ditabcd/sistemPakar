<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library(array('session'));
		$this->load->library('user_agent');
	}

	public function index()
	{
		if ($this->session->userdata('username')==true) {
			redirect('home');
		} else {
			$this->load->view('login');
			}

	}

	public function cek_login($username,$password){
		$this->db->select('*');
		$this->db->from('tb_user');
		$this->db->where('username', $username);
		$this->db->where('password',$password);
		return $this->db->get()->row();
	}

	public function aksi_login()
	{
		$user=$this->input->post('username');
		$pass=$this->input->post('pass');
		$cek=$this->cek_login($user,$pass);
		if ($cek>0) {
			$data_session=array(
				'id_user'=>$cek->id_user,
				'username'=>$cek->username,
				'id_level'=>$cek->id_level
			);
			$this->session->set_userdata($data_session);
			if($this->session->userdata('id_level')==1){
				redirect('dashboard');
			} elseif($this->session->userdata('id_level')==2){
				redirect('home');
			}
		} else{
			redirect('login');
		}
	}

 
	public function register()
	{
        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'username', 'trim|required');
        $this->form_validation->set_rules('password', 'password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('register');
        } else {
            $set_users = [
                'username' => $this->input->post('username'),
                'password' => md5($this->input->post('password')),
                'id_level' => '2'
            ];
            $this->db->insert('tb_user', $set_users);

            redirect("login");
        }
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('home');
	}


 // function auth_login($username)
 //    {
 //        $query = $this->db
 //            ->query("Select * from tb_user where username='$username' AND password=md5('$password') LIMIT 1");
 //    }

 //    function auth(){
 //        $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
 //        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
 
 //        // $cek_dosen=$this->login_model->auth_dosen($username,$password);
 
 //        if($cek_login->num_rows() > 0){ //jika login sebagai dosen
 //                        $data=$cek_login->row_array();
 //                $this->session->set_userdata('masuk',TRUE);
 //                $data['level']=='1';
                    
 //                $this->session->set_userdata('akses','1');
 //                $this->session->set_userdata('username',$data['username']);
 //                $this->session->set_userdata('password',$data['password']);
 //                redirect('dashboard');
 
 //        }else{ //jika login sebagai mahasiswa
 //                    // $cek_login=$this->login_model->auth_mahasiswa($username,$password);
 //                    if($cek_login->num_rows() > 0){
 //                            $data=$cek_login->row_array();
 //                    $this->session->set_userdata('masuk',TRUE);
 //                            $this->session->set_userdata('akses','2');
 //                            $this->session->set_userdata('username',$data['username']);
 //                            $this->session->set_userdata('password',$data['password']);
 //                            redirect('home');
 //                    }else{  // jika username dan password tidak ditemukan atau salah
 //                            $url=base_url();
 //                            echo $this->session->set_flashdata('msg','Username Atau Password Salah');
 //                            redirect($url);
 //                    }
 //        }
 
 //    }

}
