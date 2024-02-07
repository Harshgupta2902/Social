<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
    }

	public function error(){
		$this->load->view('errors/html/error_404');
	}

	public function index(){
		$this->load->view('landing');
	}

	public function download(){
		$this->load->view('download');
	}
}
