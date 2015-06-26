<?php
class User_model extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function getUserInfo(){
        $query = $this->db->get('user_data');

        return $query->result_array();
    }

    public function getUserProfessionalSkills(){
        $this->db->order_by('percent', 'DESC');
        $query = $this->db->get('professional_skills');

        return $query->result_array();
    }

    public function getUserPersonalSkills(){
        $this->db->order_by('percent', 'DESC');
        $query = $this->db->get('personal_skills');

        return $query->result_array();
    }
}