<?php

class Outbox extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mails_model');
        $this->check_isvalidated();
    }

    public function delete()
    {
        $id_arr = $this->input->post('mail_id');
        $this->mails_model->delete_mails($id_arr);

        redirect('outbox');
    }

	function index()
	{
        $date = $this->input->get('date_filter');
        $email = $this->input->get('email_filter');

        $data['mails'] = $this->mails_model->get_mails_by_filter($date, $email);
        $data['title'] = 'Отправленные сообщения';

        $this->load->view('view_header.php', $data);
        $this->load->view('view_outbox.php', $data);
        $this->load->view('view_footer.php');
	}

    private function check_isvalidated()
    {
        if(! $this->session->userdata('validated'))
        {
            redirect('login');
        }
    }
}

?>