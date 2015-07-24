<?php

class Home extends CI_Controller{
    public function index(){
        $this->load->view('administration/partials/header');
        $this->load->view('administration/home/index');
        $this->load->view('administration/partials/footer');
    }
}