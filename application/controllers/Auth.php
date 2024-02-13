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
        $this->load->library('form_validation');
		$this->load->library('session');

	}

	public function sign_in()
	{
		if ($this->input->post('email') && $this->input->post('password')) {
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			$user = $this->UserModel->authenticate($email, $password);
			$name = $user['first_name'] . ' ' . $user['surname'];
			if ($user) {
				$this->session->set_userdata('logged_in', true);
        		$this->session->set_userdata('name', $name);
        		$this->session->set_userdata('userid', $user['id']);
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
		if ($this->input->post('email') &&  $this->input->post('password')) {
			$password = $this->input->post('password');
			$gender = $this->input->post('gender');
			$data = array(
				'first_name' => $this->input->post('firstname'),
				'surname' => $this->input->post('surname'),
				'email' => $this->input->post('email'),
				'password' => $password,
				'cpassword' => md5($password),
				'date_of_birth' => $this->input->post('date') . '-' . $this->input->post('month') . '-' . $this->input->post('year'),
				'gender' => $gender,
				'image' => 'assets/images/avatar/'.$gender.'.avif'
			);

			// Calculate age
			$dob = new DateTime($data['date_of_birth']);
			$now = new DateTime();
			$age = $now->diff($dob)->y;

			if ($age < 13) {
				$data['error'] = 'You must be at least 13 years old to sign up.';
				$this->load->view('auth/sign-up', $data);
			} elseif ($this->UserModel->is_email_exist($data['email'])) {
				$data['error'] = 'Email address already exists';
				$this->load->view('auth/sign-up', $data);
			} else {
				// print_r($data);
				$this->UserModel->insert_user($data);
				redirect('sign-in');
			}
		} else {
			$this->load->view('auth/sign-up');
		}
	}

	public function logout()
	{
		$userdata_keys = $this->session->all_userdata();

		// Unset each userdata key
		foreach ($userdata_keys as $key => $value) {
			$this->session->unset_userdata($key);
		}
		$this->session->sess_destroy();
		redirect('sign-in');
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
