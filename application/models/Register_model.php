<?php

class Register_model extends CI_Model
{
    public function get_register()
    {
        $data = array(
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username')
        );
        $this->db->insert('register', $data);
    }

    public function get_user()
    {
        $query = $this->db->get('register');
        return $query->result_array();
    }
}
