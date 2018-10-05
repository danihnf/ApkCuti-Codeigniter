<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');

	}

	public function index(){
		$this->load->view('back/V_login');
	}

	function login(){
		$nik = $this->input->post('nik');
		$password = $this->input->post('password');
		$level = $this->input->post('level');

		$where = array(
			'nik' => $nik,
			'password' => md5($password),
			'level' => $level
			);
		$cek = $this->m_login->cek_login("pegawai",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'nik' => $nik,
				'level' => $level,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);

			redirect(base_url("C_dashboard/index/".$nik));

		}else{
			echo "<script>alert('Username atau Password salah! Silahkan cek kembali');history.go(-1);</script>";	
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('C_login'));
	}

}

/* End of file c_dashboard.php */
/* Location: ./application/controllers/c_dashboard.php */