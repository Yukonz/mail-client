<?php

class Newmail extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mails_model');
        $this->check_isvalidated();
    }

    public function createMail()
    {
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('message', 'message', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $data['title'] = 'Новое письмо';
            $this->load->view('view_header.php', $data);
            $this->load->view('view_newmail.php');
            $this->load->view('view_footer.php');
        }
            else
            {
                $data['title'] = 'Отправлено!';
                $this->mails_model->send_mail();
                $this->load->view('view_header.php', $data);
                $this->load->view('view_success.php');
                $this->load->view('view_footer.php');
            }
    }

	public function index()
	{
        $data['title'] = 'Новое письмо';
        $this->load->view('view_header.php', $data);
        $this->load->view('view_newmail.php');
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