<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('m_user');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("c_login"));
		}

	}
	
	public function index(){
		$jumlah['jumlah'] = $this->m_user->jumlah_data();
		$jumlah['cutiges'] = $this->m_user->cuti();
		$this->load->view('back/V_admin', $jumlah);
	}

	public function user(){

		$data['pegawai'] = $this->m_user->data();
		$data['jumlah'] = $this->m_user->jumlah_data();
		$data['cutiges'] = $this->m_user->cuti();
		$this->load->view('back/V_user', $data);
	}

	public function inputuser(){

		$op = $this->input->post('op');
		$id = $this->input->post('id');
		$nik = $this->input->post('nik');
		$nama = $this->input->post('nama');
		$level = $this->input->post('level');
		$password = $this->input->post('password');
		
		$data = array(
			
			'nik' => $nik,
			'nama' => $nama,
			'level' => $level,
			'password' => md5($password),

			);
		if($op=="tambah"){
			$this->m_user->adduser($data);
		}
		else{
			$this->m_user->update($id,$data);
		}
	
		redirect('C_dashboard/user');
	}

	public function inputcuti(){
		$op = $this->input->post('op');
		$id = $this->input->post('id');
		$id_pegawai = $this->input->post('id_pegawai');
		$nik_pegawai = $this->input->post('nik_pegawai');
		$mulai = $this->input->post('mulai');
		$akhir = $this->input->post('akhir');
		$stok = $this->input->post('stok');
		$alasan = $this->input->post('alasan');
		$status = $this->input->post('status');
			$tgl = date('Y-m-d H:i', strtotime($mulai));
			$tgl2 = date('Y-m-d H:i', strtotime($akhir));
		$data = array(
			
			'id_pegawai' => $id_pegawai,
			'nik_pegawai' => $nik_pegawai,
			'mulai' => $tgl,
			'akhir' => $tgl2,
			'stok_cuti' => $stok,
			'alasan' => $alasan,
			'status' => $status

			);
		if($op=="tambah"){
			$this->m_user->addcuti($data);
		}
		else{
			$this->m_user->update($id,$data);
		}
		
		redirect('C_dashboard/cutinik/'.$nik_pegawai);
	}


	public function hapus($id){

		$this->m_user->hapus($id);
		redirect('C_dashboard/cutinik');
	}

	public function cutinik($nik){
		
		$data['cutiid'] = $this->m_user->nikcuti($nik);
		$data['cutiku'] = $this->m_user->idcuti($nik);
		$data['jumlah'] = $this->m_user->jumlah_data();
		$data['cutiges'] = $this->m_user->cuti();

		$this->load->view('back/V_cutiuser',$data);	
	}

}

/* End of file C_dashboard.php */
/* Location: ./application/controllers/C_dashboard.php */