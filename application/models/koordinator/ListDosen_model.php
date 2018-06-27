<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ListDosen_model extends CI_Model {
	
	function __construct(){
		parent::__construct();
	}
	
	public function get_ListDosen() {
		
		return $ListDosen = $this->db->get(" dosen ");
	}
	
	public function edit($id_dosen){
	return $this->db->get_where('dosen',array('id_dosen'=>$id_dosen));
	}
	function edit_data($where,$table){		
	return $this->db->get_where($table,$where);
	}


	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
}