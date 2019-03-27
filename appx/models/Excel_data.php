<?php
class Excel_data extends CI_Model {
    public function __construct(){
        $this->load->database();
    }
    public function add($data){
        if($this->db->insert('tbl_books', $data)){
            return true;
        }else{
            return false;
        }
    }
}