<?php
class Home extends CI_Controller{
    public function __construct(){
        parent::__construct();

        $this->load->model('home/user_model');
        $this->load->model('posts/post_model');
    }
    public function index(){
        $data['user_info'] = $this->user_model->getUserInfo()[0];
        $posts = [];
        $commentsCount = [];

        $posts['posts'] = $this->post_model->getAllPosts();
        foreach($posts['posts'] as $post){
            $commentsCount[$post['id']] = sizeof($this->post_model->getPostComments($post['id']));
        }
        $posts['comments'] = $commentsCount;

        $this->load->view('partials/header', $data);
        $this->load->view('home/index', $posts);
        $this->load->view('partials/footer', $data);
    }

    public function about(){
        $data['user_info'] = $this->user_model->getUserInfo()[0];
        $data['pro_skills'] = $this->user_model->getUserProfessionalSkills();
        $data['personal_skills'] = $this->user_model->getUserPersonalSkills();

        $this->load->view('partials/header', $data);
        $this->load->view('home/about', $data);
        $this->load->view('partials/footer', $data);
    }


}