<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
	  parent::__construct();

	  $this->load->library('Api', 'api');
	}

	public function index() {
		if (!$this->session->userdata('auth')) {
			$this->load->view('includes/header.php');
			$this->load->view('home/login');
		} else {
			redirect('admin');
		}
	}

	public function login() {
		extract($_POST);

		$rs = [
			'title' => 'Ooops',
			'msg' 	=> 'Oops something went wrong!',
			'type'  => 'danger',
			'code'  => 0
		];

		$username = $this->input->post('username');
		$password = $this->input->post('password');

		if ($username == "") {
			$rs['msg'] = 'Username is required!';
		} else if ($password == "") {
			$rs['msg'] = 'Password is required!';
		} else {
			$check = $this->db->where('username', $username)->get('users');

			if ($check->num_rows() > 0) {
				$data = $check->row_array();
				
				if ( MD5($password) == $data['password'] ) {
					
					$this->session->set_userdata([
						'id'          => $data['id'],
            'employee_id' => $data['emp_id'],
            'auth'        => 1
					]);

					$rs = [
						'title' => 'Success',
						'msg' 	=> base_url('admin'),
						'type' 	=> 'success',
						'code'  => 1
					];

				} else {
					$rs['msg'] = 'Invalid username/password!';
				}
			} else {
				$rs['msg'] = 'Invalid username/password!';
			}
		}

		echo json_encode($rs); exit();
	}

	public function logout() {
		$this->api->logout();
	}
}
