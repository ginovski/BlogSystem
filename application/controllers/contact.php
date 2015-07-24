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
        $name = $this->input->post("name");
        $email = $this->input->post("email");
        $message = $this->input->post("message");


    }
}