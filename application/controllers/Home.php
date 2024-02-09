<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
		$this->load->library('session');
		$this->load->model('HomeModel');

    }


	public function index(){
        if ($this->session->userdata('logged_in') == true || !empty($this->session->userdata('name'))) {

            $data['friends'] = $this->HomeModel->getFriend();
            print_r($data);

            $this->load->view('home/home', $data);
        } else {
            redirect('sign-in');
        }		
	}



}
