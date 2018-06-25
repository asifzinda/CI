<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Tanggal extends CI_Controller {
	
		function __construct(){
		parent::__construct();
		
		 $this->load->model('koordinator/TanggalModel','',TRUE);
		 $this ->load->helper('url');
			
		
	}

	public function index(){
		$data = array(
			'date' => $this->TanggalModel->tampil_judul()->result(),
			'final' => $this->TanggalModel->tampil_final()->result(),
			'sempro' => $this->TanggalModel->tampil_sempro()->result());
			 $this->load->view('koordinator/tanggalview',$data);
			
	
	}

	public function insert_judul(){
		$this->load->model('koordinator/tanggalmodel');
		$duration = $_POST['Duration'];
		$data = array(
			'Duration' => $duration, 
			'Note' => "Usulan Judul "
		);
		$insert = $this->tanggalmodel->insert_data('date', $data);
		if($insert > 0){
			redirect ('koordinator/Tanggal');
			
			   
		}else{
			echo "You must insert other";
		}
	}
	
	public function insert_final(){
		$this->load->model('koordinator/tanggalmodel');
		$duration = $_POST['Duration'];
		$data = array('Duration' => $duration, 'Note' => "Usulan Final ");
		$insert = $this->tanggalmodel->insert_data('date', $data);
		if($insert > 0){
			redirect ('koordinator/Tanggal');
		}else{
			echo "You must insert other";
		}
	}
	
	public function insert_sempro(){
		$this->load->model('koordinator/tanggalmodel');
		$duration = $_POST['Duration'];
		$data = array('Duration' => $duration, 'Note' => "Usulan Sempro ");
		$insert = $this->tanggalmodel->insert_data('date', $data);
		if($insert > 0){
			redirect ('koordinator/Tanggal');
		}else{
			echo "You must insert other";
		}
	}
	
	function delete($id){ //fungsi delete
    $this->load->model('koordinator/tanggalmodel'); //load model
    $this->tanggalmodel->deldata($id)->result();
    //ngacir ke fungsi delTransaksi
    redirect('koordinator/tanggal'); //redirect
 
}
}

	