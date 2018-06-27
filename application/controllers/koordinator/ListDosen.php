<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ListDosen extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model('ListDosen_model','',TRUE);
	}

	public function index(){
		$this ->load->model('ListDosen_model');
		$data['dosen'] = $this->ListDosen_model->get_ListDosen()->result();
		$this->load->view("koordinator/ListDosenView", $data);
	}
	
	public function Editlist() 
	{
		//$data['datalist']=$this->db->get_where('dosen');
		//$this->load->view("koordinator/EditListDosen", $data);
		
		$this->load->model('ListDosen_Model');
		$id_dosen = $this->uri->segment(4);
		$data['edit']=$this->ListDosen_Model->edit($id_dosen)->row_array();
		$this->load->view('koordinator/EditListDosen',$data);
	}
	public function edit($id_dosen){
	$where = array('id_dosen' => $id_dosen);
	$data['dosen'] = $this->ListDosen_model->edit_data($where,'dosen')->result();
	$this->load->view('koordinator/EditListDosen',$data);
	}

	function update(){
	$id_dosen = $this->input->post('id_dosen');
	$nama = $this->input->post('nama');
	$prodi = $this->input->post('prodi');
	$kuota = $this->input->post('kuota');  
	$level = $this->input->post('level');
 
	$data = array(
		'nama' => $nama,
		'prodi' => $prodi,
		'kuota' => $kuota,
		'level' => $level
	);
 
	$where = array(
		'id_dosen' => $id_dosen
	);
 
	$this->ListDosen_model->update_data($where,$data,'dosen');
	redirect('koordinator/ListDosen');
	}	
	 
}