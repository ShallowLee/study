<?php

class Admin_model extends CI_Model {
	private $table_name = "admin";

    public function get_one($name,$pass){
        $array = array('username' => $name, 'password' => $pass);
    	$query = $this->db->where($array)->get($this->table_name);
    	return $query->row();
    }
    
}