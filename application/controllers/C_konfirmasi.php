<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class C_konfirmasi extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model("m_user");

		if($this->session->userdata('status') != "login"){
			redirect(base_url("c_login"));
		}

	}

	public function index(){

		$data['cutiges'] = $this->m_user->cutiyuk();
		$data['jumlah'] = $this->m_user->jumlah_data();
		$this->load->view('back/V_cuti', $data);
	}

	public function konfirmasi($id){

		$status = $this->input->post('status');
		$stok_cuti = $this->input->post('stok_cuti');
		$data = array(

			'status' => $status,
			'stok_cuti' => $stok_cuti
		);

		$this->m_user->konfirmasi($data,$id);

		redirect('C_konfirmasi');

	}

	public function hapusCuti($id){

		$this->m_user->hapuskonfirmasi($id);
		redirect('C_konfirmasi');
	}


}

/* End of file c_dashboard.php */
/* Location: ./application/controllers/c_dashboard.php */