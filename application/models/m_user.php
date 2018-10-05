<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

	public function adduser($data){

    	$this->db->insert('pegawai',$data);
    }

    public function addcuti($data){

        $this->db->insert('cutiges',$data);
    }

    public function nikcuti($nik){

        $this->db->select('*');
        $this->db->from('cutiges');
        $this->db->join('pegawai', 'pegawai.nik = cutiges.nik_pegawai', 'left');
         $this->db->where("nik",$nik);
         $this->db->where("cutiges.status = '1'")
            ->order_by("stok_cuti","asc");
        return $this->db->get();
    }

    public function idcuti($nik){
        $this->db->where("nik",$nik);
            return $this->db->get('pegawai');
    } 

    public function laststok($nik){

        $this->db->where("nik_pegawai",$nik)    
                ->order_by("stok_cuti", "asc")
                ->limit(1);
        return $this->db->get('cutiges');
    }       

    public function apdet($data,$nik){

        $this->db->where("nik",$nik);
        $this->db->update('pegawai',$data);
    }

    public function data(){

        return $this->db->get('pegawai')->result();
    }

    public function datauser(){

        return $this->db->get('pegawai')->num_rows();
    }

    function jumlah_data(){
        $this->db->where("status = '0'");
        return $this->db->get('cutiges')->num_rows();

    }

    function cek(){
        return $this->db->get('cutiges')->num_rows();

    }

    public function hapus($id){

        $this->db->where("id",$id);
        $this->db->delete('pegawai');
    }

    public function konfirmasi($data,$id){

    	$this->db->where("id",$id);
    	$this->db->update('cutiges',$data);
    
    }

    public function cuti(){

        $this->db->select('*');
        $this->db->from('cutiges');
        $this->db->join('pegawai', 'pegawai.nik = cutiges.nik_pegawai', 'left');
        $this->db->where("cutiges.status = '0'");
        return $this->db->get(); 
    }

    public function cutiyuk(){

        $this->db->select('cutiges.id, pegawai.nik, pegawai.nama, pegawai.level, cutiges.mulai, cutiges.akhir, cutiges.stok_cuti');
        $this->db->from('cutiges');
        $this->db->join('pegawai', 'pegawai.nik = cutiges.nik_pegawai', 'left');
        $this->db->where("cutiges.status = '0'");
        return $this->db->get(); 
    }


    public function hapuskonfirmasi($id){

        $this->db->where("id",$id);
        $this->db->delete('cutiges');
    }

}

/* End of file m_user.php */
/* Location: ./application/models/m_user.php */

?>