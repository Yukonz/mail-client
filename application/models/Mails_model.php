<?php
class Mails_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function get_mails()
    {
        $query = $this->db->get('mails');
        return $query->result_array();
    }

    public function get_mails_by_filter($date, $email)
    {
        if (!empty($date))
        {
            $this->db->where('date', $date);
        }

        if (!empty($email))
        {
            $this->db->where('email', $email);
        }

        $query = $this->db->get('mails');

        return $query->result_array();
    }

    public function delete_mails($id_arr)
    {
        if (!empty($id_arr))
        {
            $this->db->where_in('id', $id_arr);
            $this->db->delete('mails');
        }
    }

    public function send_mail()
    {
        $data = array(
            'email' => $this->input->post('email'),
            'title' => $this->input->post('title'),
            'message' => $this->input->post('message'),
            'username' => "this_user",
            'date' => date("Y-m-d")
        );

        return $this->db->insert('mails', $data);
    }
}