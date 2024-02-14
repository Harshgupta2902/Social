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

    
    public function generate_unique_username($first_name, $surname) {
        $username = strtolower($first_name . ' '. $surname);
        $username .= rand(0100, 9999);
        $username = str_replace(' ', '_', $username);

        $this->db->where('username', $username);
        $query = $this->db->get('users');

        while ($query->num_rows() > 0) {
            $username = strtolower($first_name . ' '. $surname);
            $username .= rand(100, 999);
            $username = str_replace(' ', '_', $username);

            $this->db->where('username', $username);
            $query = $this->db->get('users');
        }

        return $username;
    }

}
?>


