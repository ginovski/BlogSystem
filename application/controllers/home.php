<?php
class Home extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('home/user_model');
    }
    public function index(){
        $data['user_info'] = $this->user_model->getUserInfo()[0];

        $this->load->view('partials/header', $data);
        $this->load->view('home/index');
        $this->load->view('partials/footer', $data);
    }
}