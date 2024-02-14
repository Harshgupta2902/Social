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

    public function getFollowersCount($user_id){
        $this->db->where('user_id', $user_id);
        $this->db->where('status', 1);
        $count = $this->db->count_all_results('follow');
        return $count;
    }


    public function getFollowersList($user_id){
        $this->db->select('users.*');
    
        $this->db->from('users');
        $this->db->join('follow', 'users.id = follow.follower_id');
    
        $this->db->where('follow.user_id', $user_id);
        $this->db->where('follow.status', 1);
    
        return $this->db->get()->result_array();
    }


   





}
?>