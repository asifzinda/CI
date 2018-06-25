<?php
class Review_M extends CI_Model{
	
//	function tampil_review(){
//		return $review_judul = $this->db->get("review_judul");
		
//	}	
public function __construct(){
		parent::__construct();
		$this ->load ->database();
	}
	
public function tampil(){
	
	$this->db->select('review_judul.*,mahasiswa.nim,mahasiswa.nama_pelengkap');
	$this->db->join('mahasiswa', 'mahasiswa.nim = review_judul.nim');
	$this->db->from('review_judul');
	return $this->db->get();

}
public function get_tampil($id){
	
	$this->db->select('review_judul.*,mahasiswa.nim,mahasiswa.nama_pelengkap');
	$this->db->join('mahasiswa', 'mahasiswa.nim = review_judul.nim');
	$this->db->from('review_judul');
	$this->db->where('id',$id);
	return $this->db->get();

}
}
?>