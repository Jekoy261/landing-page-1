<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

	// public function __construct(){
	//   parent::__construct();
	// }

	public function index() {
		$this->load->view('home/index');
	}

	public function user() {
		echo 1; exit();
	}
}
