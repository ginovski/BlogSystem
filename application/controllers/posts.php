<?php
class Posts extends CI_Controller{
    public function __construct(){
        parent::__construct();

        $this->load->model('home/user_model');
        $this->load->model('posts/post_model');
    }

    public function details($id){
        $data['user_info'] = $this->user_model->getUserInfo()[0];
        $data['post'] = $this->post_model->getPostById($id)[0];
        $data['comments'] = $this->post_model->getPostComments($id);

        $this->load->view('partials/header', $data);
        $this->load->view('posts/details', $data);
        $this->load->view('partials/footer', $data);
    }
}