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
		$this->load->model('NotificationModel');
        // $this->load->controller('Notification');

    }


	public function index(){
        if ($this->session->userdata('logged_in') == true || !empty($this->session->userdata('name'))) {
            
            $current_user_id = $this->session->userdata('userid');
            $follows = $this->FollowModel->get_follows_by_user_id($current_user_id);
            $data['friends'] = $this->HomeModel->getFriend($current_user_id);            
            $data['follows'] = $follows;
            $data['userData'] = $this->HomeModel->getUserData($current_user_id);            
            $data['notifications'] = $this->NotificationModel->getNotifications();            

            // echo "<pre>";
            // print_r( $data['notifications']);
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
        $userData = $this->HomeModel->getUserData($current_user_id);            

        $message = $userData[0]['first_name'] . ' ' . $userData[0]['surname'] . ' sent you a friend request.';
        $image = $userData[0]['image'];          
        $type = 'Follow';
        $approved_message = $userData[0]['first_name'] . ' ' . $userData[0]['surname'] . ' is following you.';
        $this->NotificationModel->send($follow_id, $message, $image, $type, $approved_message, 0);

        $this->FollowModel->follow_user($data);
    }

    public function unfollow($unfollow_id){
        $current_user_id = $this->session->userdata('userid');
        $this->FollowModel->delete_follow($current_user_id, $unfollow_id);
    }
    
    public function update_follow_status($follower_id, $notification_id) {
        $current_user_id = $this->session->userdata('userid');
    
        $data = array(
            'status' => 1
        );
        
        $this->db->where('user_id', $follower_id);
        $this->db->where('follower_id', $current_user_id);
        $this->db->update('follow', $data);

        $this->db->where('id', $notification_id);
        $this->db->update('notification', $data);
    

        $followerData = $this->HomeModel->getUserData($current_user_id);       

        $message = '';
        $image = $followerData[0]['image'];          
        $type = 'Follow';
        $approved_message = $followerData[0]['first_name'] . ' ' . $followerData[0]['surname'] . ' accepted your follow request.';
        $this->NotificationModel->send($follower_id, $message, $image, $type, $approved_message, 1);
        // Debugging: Check if the update query executed successfully
        if ($this->db->affected_rows() > 0) {
           
            echo "Follow status updated successfully.";
        } else {
            echo "Follow status update failed.";
        }
        // Debugging: Print the last executed SQL query
        echo $this->db->last_query();
    }

    public function deleteRequest($follower_id, $notification_id){
        $current_user_id = $this->session->userdata('userid');


        $this->db->where('user_id', $follower_id);
        $this->db->where('follower_id', $current_user_id);
        $this->db->delete('follow');

        $this->db->where('id', $notification_id);
        $this->db->delete('notification');

        if ($this->db->affected_rows() > 0) {
            echo "Follow status updated successfully.";
        } else {
            echo "Follow status update failed.";
        }
        // Debugging: Print the last executed SQL query
        echo $this->db->last_query();

    }


}





// public function update_follow_status($follower_id, $notification_id) {
//     $current_user_id = $this->session->userdata('userid');

//     $data = array(
//         'status' => 1
//     );
    
//     $this->db->where('user_id', $follower_id);
//     $this->db->where('follower_id', $current_user_id);
//     $this->db->update('follow', $data);

//     $this->db->where('id', $notification_id);
//     $this->db->update('notification', $data);

//     if ($this->db->affected_rows() > 0) {
//         $followerData = $this->HomeModel->getUserData($follower_id);            

//         $message = '';
//         $image = $followerData[0]['image'];          
//         $type = 'Follow';
//         $approved_message = $followerData[0]['first_name'] . ' ' . $followerData[0]['surname'] . ' accepted your follow request.';
//         $this->NotificationModel->send($follow_id, $message, $image, $type, $approved_message, 1);
//         echo "Follow status updated successfully.";
//     } else {
//         echo "Follow status update failed.";
//     }
//     echo $this->db->last_query();
// }