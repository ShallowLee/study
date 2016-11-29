<?php

class Products_catalog_model extends CI_Model {
	private $table_name = "product_catalog";


    public function get_all(){
		$query = $this->db->get($this->table_name);
		return $query->result();
    }

   
    public function get_one($id){
    	$query = $this->db->where("id",$id)->get($this->table_name);
    	return $query->row();
    }
  
  	public function get_by_cata_id($parent_id){
		$query = $this->db->where('parent_id',$parent_id)->get($this->table_name);
		return $query->result();
  	}


}