<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class TanggalModel extends CI_Model {
	
	function __construct(){
		parent::__construct();
	}

		
	
	public function insert_data($tabel_tanggal,$data){
		$insert = $this->db->insert($tabel_tanggal,$data);
		return $data;
	}
	public function tampil_judul(){
		return $query = $this -> db->get_where('date', array('note' => 'Usulan Judul'));
		
	}
	public function tampil_final(){
		return $query = $this->db->get_where('date', array('note' => 'Usulan Final'));
	}
	public function tampil_sempro(){
		return $query = $this->db->get_where('date', array('note' => 'Usulan Sempro'));
	}
	function deldata($id){ //fungsi delete berdasarkan id
    $this->db->where('id',$id); //pencocokan id, dimana id_transaksi == inputan $id_transaksi
    $this->db->delete('date'); //eksekusi
    return $c = $this -> db -> get_where('date', array('Duration' => '0000-00-00 00:00:00'));
   
}
	
				
}