<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->model('UserModel');
        $this->load->library('form_validation'); // Load form validation library

	}

	public function sign_in()
	{
		if ($this->input->post('email') && $this->input->post('password')) {
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			$user = $this->UserModel->authenticate($email, $password);

			if ($user) {
				redirect('home');
			} else {
				$data['error'] = 'Invalid email & password';
				$this->load->view('auth/sign-in', $data);
			}
		} else {
			$this->load->view('auth/sign-in');
		}
	}


	public function sign_up()
	{
		
        $this->form_validation->set_rules('firstname', 'First Name', 'trim|required');
        $this->form_validation->set_rules('surname', 'Surname', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('date', 'Date', 'required');
        $this->form_validation->set_rules('month', 'Month', 'required');
        $this->form_validation->set_rules('year', 'Year', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
	
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('auth/sign-up');
		} else {
			if ($this->UserModel->is_email_exist($email)) {
				$data['error'] = 'Email address already exists';
				$this->load->view('auth/sign-up', $data);
			} else {
				$data = array(
					'first_name' => $this->input->post('firstname'),
					'surname' => $this->input->post('surname'),
					'email' => $this->input->post('email'),
					'password' => $password,	
					'cpassword' => md5($password),
					'date_of_birth' => $this->input->post('year') . '-' . $this->input->post('month') . '-' . $this->input->post('date'),
					'gender' => $this->input->post('gender')
				);
	
				$this->UserModel->insert_user($data);
	
				redirect('sign-in');
			}
		}
	}
	// public function register()
	// {
	// 	$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
	// 	$this->form_validation->set_rules('password', 'Password', 'required');
	// 	$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');
	
	// 	if ($this->form_validation->run() == FALSE) {
	// 		$this->load->view('auth/sign-up');
	// 	} else {
	// 		$email = $this->input->post('email');
	// 		$password = $this->input->post('password');
	// 		$confirm_password = $this->input->post('confirm_password');
	
	// 		if ($password !== $confirm_password) {
	// 			redirect('sign_up');
	// 		}
	
	// 		if ($this->UserModel->is_email_exist($email)) {
	// 			$this->form_validation->set_message('is_email_exist', 'The email address already exists.');
	// 			$this->load->view('auth/sign-up');
	// 		} else {
	// 			$data = array(
	// 				'email' => $email,
	// 				'password' => md5($password),
	// 			);
	
	// 			$this->UserModel->insert_user($data);
	
	// 			redirect('sign-in');
	// 		}
	// 	}
	// }
	





}
