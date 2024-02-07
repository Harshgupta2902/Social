<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
		$this->load->model('UserModel');

    }

	public function login() {
		if ($this->input->post('email') && $this->input->post('password')) {
			$email = $this->input->post('email');
			$password = $this->input->post('password');
	
			$user = $this->UserModel->authenticate($email, $password);
	
			if ($user) {
				redirect('home');
			} else {
				// redirect('login');
				echo "Invalid email or password";
			}
		} else {
			// Load login form view
			$this->load->view('auth/login');
		}
	}

	public function home(){
		
	}


}
