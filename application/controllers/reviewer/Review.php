<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Review extends CI_Controller {
	
	function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->load->view("reviewer/reviewview");
	}

	
}