<?php
class Post_model extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function getAllPosts(){
        $query = $this->db->get('posts');

        return $query->result_array();
    }
}