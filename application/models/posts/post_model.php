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

    public function getPostById($id){
        $query = $this->db->get_where('posts', array('id' => $id));

        return $query->result_array();
    }

    public function getPostComments($id){
        $query = $this->db->get_where('comments', array('post_id' => $id));

        return $query->result_array();
    }
}