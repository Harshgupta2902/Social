<?php
class ProfileModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    
    public function getFriend($current_user_id){
        $this->db->order_by('RAND()');
        $this->db->limit(5);
        $users = $this->db->get('users')->result_array();
        
        $finalList = [];
        foreach ($users as $user) {
            if ($user['id'] == $current_user_id) {
                continue;   
            }
            if (!$this->isUserFollowed($current_user_id, $user['id'])) {
                $finalList[] = $user;
            }
        }
        return $finalList;

    }

    private function isUserFollowed($current_user_id, $user_id_to_check){
        $this->db->where('user_id', $current_user_id);
        $this->db->where('follower_id', $user_id_to_check);
        $query = $this->db->get('follow');
        
        return $query->num_rows() > 0; // Returns TRUE if user is followed, FALSE otherwise
    }
    
}
?>