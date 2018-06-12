<?php

Class Model_login extends CI_Model {

    function chek($username,$password) {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $user=$this->db->get('user')->row_array();
        return $user;
    }

}

?>