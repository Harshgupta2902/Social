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


	public function index() {
        if ($this->session->userdata('logged_in') == true || !empty($this->session->userdata('name'))) {
            $username = $this->input->get('username');
            if (empty($username)) {
                // If a username is provided in the URL, redirect to the home page
                redirect('home');
            }
    
            // If no username is provided, load the profile of the logged-in user
            $current_user_id = $this->session->userdata('userid');
            $data['followersCount'] = $this->FollowModel->getFollowersCount($current_user_id);
            $data['friends'] = $this->HomeModel->getFriend($current_user_id);            
            $data['userData'] = $this->ProfileModel->getUserData($username);            
            $data['followersList'] = $this->FollowModel->getFollowersList($current_user_id);    
            $data['notifications'] = $this->NotificationModel->getNotifications();            
    
            // Load the profile view
            $this->load->view('profile/profile', $data);
        } else {
            // If the user is not logged in, redirect to the sign-in page
            redirect('sign-in');
        }		
    }
    
    


}
