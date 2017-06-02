<?php

class Register extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
    }

    function index()
    {
        $data['title'] = 'Регистрация';
        $this->load->view('view_header.php', $data);
        $this->load->view('view_register.php');
    }

    public function register()
    {
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $data['title'] = 'Регистрация';
            $this->load->view('view_header.php', $data);
            $this->load->view('view_register.php');
        }
            else
            {
                $register = $this->login_model->add_user();

                if ($register == false){
                    echo "Такой пользователь уже есть";
                    $data['title'] = 'Регистрация';
                    $this->load->view('view_header.php', $data);
                    $this->load->view('view_register.php');
                }
                    else
                    {
                        $data['title'] = 'Поздравляем!';
                        $this->load->view('view_header.php', $data);
                        $this->load->view('view_register_success.php');
                    }
            }
    }
}

?>