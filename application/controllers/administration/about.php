<?php

class About extends CI_Controller{
    public function index(){
        $this->load->view('administration/partials/header');
        $this->load->view('administration/about/index');
        $this->load->view('administration/partials/footer');
    }
}