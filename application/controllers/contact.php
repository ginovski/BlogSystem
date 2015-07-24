<?php
class Contact extends CI_Controller{
    public function __construct(){
        parent::__construct();

        $this->load->model('home/user_model');
    }

    public function index(){
        $data['user_info'] = $this->user_model->getUserInfo()[0];

        $this->load->view('partials/header', $data);
        $this->load->view('contact/index', $data);
        $this->load->view('partials/footer', $data);
    }

    public function send(){
        $this->load->library('form_validation');

        $this->form_validation->set_rules('name', 'Name', 'required|min_length[3]|max_length[20]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('message', 'Message', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $data['user_info'] = $this->user_model->getUserInfo()[0];

            $this->load->view('partials/header', $data);
            $this->load->view('contact/index', $data);
            $this->load->view('partials/footer', $data);
        }
        else
        {
            $name = $this->input->post("name");
            $email = $this->input->post("email");
            $message = $this->input->post("message");

            $this->load->library("email");

            $this->email->from($email, $name);
            $this->email->to("sashko.ginovski@gmail.com");
            $this->email->subject("Blog Contact Message -> " . $name);
            $this->email->message($message);

            redirect('home');
        }


    }
}