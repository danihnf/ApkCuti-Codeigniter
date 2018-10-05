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

		$stok = $this->input->post('stok');
		$mulai = $this->input->post('mulai');
		$akhir = $this->input->post('akhir');
			$tgl = date('Y-m-d', strtotime($mulai));
			$tgl2 = date('Y-m-d', strtotime($akhir));

		$data = array(

			'stok_cuti' => $stok,
			'mulai' => $tgl,
			'akhir' => $tgl2,
			'status' => 1
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