<?php

class Posts extends CI_Controller{
    public function index(){
        $this->load->view('administration/partials/header');
        $this->load->view('administration/posts/index');
        $this->load->view('administration/partials/footer');
    }
}