<?php

class Auth_models extends CI_Model
{
    public function validation($username, $password)
    {
        return $this->db->select('*')
            ->from('users')
            ->where(array('username' => $username, 'password' => $password))
            ->get()->row_array();
    }
}