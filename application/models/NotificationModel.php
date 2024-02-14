<?php
class NotificationModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
		$this->load->library('session');
    }



    public function send($user_id, $message, $image, $type, $approved_message, $status){

        // $user_id => the person who received the notification
        // $message => text od the notification
        // $image => image of the user who send this
        // $type => indicates the type of the notification
        // $approved_message => when user interacts with the message then show this 
        
        
        if (!isset($user_id) || !isset($message) || !isset($image) || !isset($type)) {
            return false; 
        }
        
        $allowed_types = array("Follow", "Birthday", "View", "Like");
        if (!in_array($type, $allowed_types)) {
            return false; 
        }
        
        $current_user_id = $this->session->userdata('userid');
        
        $time = date('d M Y H:i:s');
        print_r($time);
        
        $data = array();
        switch ($type) {
            case 'Follow':
                $data = array(
                    'user_id' => $user_id,
                    'sender_id' => $current_user_id,
                    'message' => $message,
                    'image' => $image,
                    'type' => $type,
                    'approved_message' => $approved_message,
                    'status' => isset($status) ? $status : '0'
                );
                break;
            case 'Birthday':
                $data = array(
                    'user_id' => $user_id,
                    'sender_id' => $current_user_id,
                    'message' => $message,
                    'image' => $image,
                    'type' => $type,
                    'approved_message' => $approved_message,
                );
                break;
            case 'View':
                $data = array(
                    'user_id' => $user_id,
                    'sender_id' => $current_user_id,
                    'message' => $message,
                    'image' => $image,
                    'type' => $type,
                    'approved_message' => $approved_message,
                );
                break;
            case 'Like':
                $data = array(
                    'user_id' => $user_id,
                    'sender_id' => $current_user_id,
                    'message' => $message,
                    'image' => $image,
                    'type' => $type,
                    'approved_message' => $approved_message,
                );
                break;
            default:
                return false;
        }
        
        // Insert data into the notification table
        $this->db->insert('notification', $data);
        
        // Check if the insertion was successful
        if ($this->db->affected_rows() > 0) {
            return true; 
        } else {
            return false; 
        }
    }



    public function getNotifications(){
        $current_user_id = $this->session->userdata('userid');
        $this->db->where('user_id', $current_user_id);
        $this->db->order_by('timestamp', 'desc');
        return $this->db->get('notification')->result_array();
    }
        
}

?>






