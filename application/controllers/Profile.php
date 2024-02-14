<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
		$this->load->library('session');
		$this->load->model('HomeModel');
		$this->load->model('FollowModel');
		$this->load->model('ProfileModel');
		$this->load->model('NotificationModel');

    }


	public function index(){
        if ($this->session->userdata('logged_in') == true || !empty($this->session->userdata('name'))) {
            
            $current_user_id = $this->session->userdata('userid');
            $data['followersCount'] = $this->FollowModel->getFollowersCount($current_user_id);
            $data['friends'] = $this->HomeModel->getFriend($current_user_id);            
            $data['userData'] = $this->HomeModel->getUserData($current_user_id);            
            $data['followersList'] = $this->FollowModel->getFollowersList($current_user_id);    
            $data['notifications'] = $this->NotificationModel->getNotifications();            
        
            // echo "<pre>";
            // print_r($data['followersCount']);
            $this->load->view('profile/profile' ,$data);
        } else {
            redirect('sign-in');
        }		
	}
    


}
