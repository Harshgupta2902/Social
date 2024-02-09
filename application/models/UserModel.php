<?php
class UserModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function authenticate($email, $password)
    {
        $query = $this->db->get_where('users', array('email' => $email, 'cpassword' => md5($password)));
        return $query->row_array();
    }

    public function insert_user($data)
    {
        $this->db->insert('users', $data);
        echo "success";
        print_r($data);
    }

    public function is_email_exist($email) {
        $this->db->where('email', $email);
        $query = $this->db->get('users');
        return $query->num_rows() > 0;
    }

    
}
?>