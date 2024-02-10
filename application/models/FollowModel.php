<?php
class FollowModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    
    public function follow_user($data){
        $this->db->set($data)->insert('follow');
    }

    public function get_follows_by_user_id($user_id) {
        $this->db->where('user_id', $user_id);
        return $this->db->get('follow')->result_array();
    }

    public function delete_follow($user_id, $follower_id) {
        $this->db->where('user_id', $user_id);
        $this->db->where('follower_id', $follower_id);
        $this->db->delete('follow');
    }


    public function is_following($user_id, $follower_id) {
        $this->db->where('user_id', $user_id);
        $this->db->where('follower_id', $follower_id);
        $query = $this->db->get('follow');
        return $query->num_rows() > 0;
    }
    



}
?>