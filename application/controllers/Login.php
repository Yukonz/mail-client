<?php

class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
    }

    public function process()
    {
        $this->load->model('login_model');
        $result = $this->login_model->validate();

        if(! $result)
        {
            $msg = "Введены неправильные данные";
            $this->index($msg);
        }
            else
            {
                redirect('outbox');
            }
    }

	public function index($msg=NULL)
    {
        $data['msg'] = $msg;
        $this->load->view('view_login.php', $data);
	}

    public function do_logout(){
        $this->session->sess_destroy();
        redirect('login');
    }
}

?>