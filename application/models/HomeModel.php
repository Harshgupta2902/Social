<?php
class HomeModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    
    public function getFriend(){
        return $this->db->limit(5)->get('users')->result_array();
    }

    
}
?>