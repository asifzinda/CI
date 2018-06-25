<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Review extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model('reviewer/Review_M');
	}

	public function index(){
		$x = $this->Review_M->tampil()->result();
		$data['review_judul'] = $x;
		$this->load->view('koordinator/ReviewView' ,$data);
	}
	
	public function editTampil(){
		$id = $this->uri->segment(4);
		$x = $this->Review_M->get_tampil($id)->row_array();
		//$data['review_judul'] = $x;
		$data =array(
			'id'=>$id,
			'x' => $x
		);
		$this->load->view('koordinator/editReviewView' ,$data);
	}
	
    public function save_editTampil(){
        $id = $this ->input->post('id');
        $data = array(
            'saran' => $this ->input ->post('saran'),
			'keterangan' => $this ->input ->post('keterangan'));
        $this ->db ->where('id',$id);
        $this ->db ->update('review_judul',$data);
        redirect('koordinator/Review');
    }
}