<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
		$this->load->library('session');
		$this->load->model('HomeModel');
		$this->load->model('FollowModel');

    }


	public function index(){
        if ($this->session->userdata('logged_in') == true || !empty($this->session->userdata('name'))) {
            
            $current_user_id = $this->session->userdata('userid');
            $follows = $this->FollowModel->get_follows_by_user_id($current_user_id);
            $data['friends'] = $this->HomeModel->getFriend();            
            $data['follows'] = $follows;
            // echo "<pre>";
            // print_r($follows);
            $this->load->view('home/home', $data);
        } else {
            redirect('sign-in');
        }		
	}

    public function fetch_follow_data(){
        $current_user_id = $this->session->userdata('userid');
        $follows = $this->FollowModel->get_follows_by_user_id($current_user_id);
        $data['follows'] = $follows;
        echo json_encode($follows);
    }

    public function follow($follow_id){
        $current_user_id = $this->session->userdata('userid');
        $data = array(
            'user_id' => $current_user_id,
            'follower_id' => $follow_id
        );
        $this->FollowModel->follow_user($data);
    }

    public function unfollow($unfollow_id){
        $current_user_id = $this->session->userdata('userid');
        $this->FollowModel->delete_follow($current_user_id, $unfollow_id);
    }
    


}
