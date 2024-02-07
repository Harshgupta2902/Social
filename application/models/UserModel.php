<?php
class UserModel extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function authenticate($email, $password) {
        $query = $this->db->get_where('users', array('email' => $email, 'password' => $password));
        return $query->row_array();
    }
}
?>
