<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Moduas extends CI_Model {

    public function save($firstname,$lastname,$gender,$birth,$category,$membership){
        $data=array(
           'firstname'=> $firstname,
           'lastname'=> $lastname,
           'gender'=> $gender,
           'birth'=> $birth,
           'category'=> $category,
           'membership'=> $membership
        );
        $this->db->insert('table_person',$data);
    }

    public function select_data(){
        return $this->db->get('table_person');
    }
    public function delete_data($firstname,$lastname,$gender,$birth,$category,$membership){
        $this->db->where('firstname','lastname','gender','birth','category','membership', $firstname,$lastname,$gender,$birth,$category,$membership);
        return $this->db->delete('table_person');
    }
}