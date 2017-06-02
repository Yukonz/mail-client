<?php

class Login_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function validate()
    {
        $username = $this->security->xss_clean($this->input->post('username'));
        $password = $this->security->xss_clean($this->input->post('password'));

        $this->db->where('username', $username);
        $this->db->where('password', $password);

        $query = $this->db->get('users');

        if($query->num_rows() == 1)
        {
            $row = $query->row();
            $data = array(
                'userid' => $row->userid,
                'username' => $row->username,
                'validated' => true
            );
            $this->session->set_userdata($data);

            return true;
        }

        return false;
    }

    public function add_user()
    {
        $username = $this->input->post('name');
        $password = $this->input->post('password');

        $this->db->where('username', $username);

        $query = $this->db->get('users');

        if($query->num_rows() == 1)
        {
            return false;
        }

        $data = array(
            'username' => $username,
            'password' => $password
        );

        return $this->db->insert('users', $data);
    }
}
?>