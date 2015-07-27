<?php

class Comments extends CI_Controller{
    public function index(){
        $this->load->view('administration/partials/header');
        $this->load->view('administration/comments/index');
        $this->load->view('administration/partials/footer');
    }
}