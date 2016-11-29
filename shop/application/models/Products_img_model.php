<?php

class Products_img_model extends CI_Model {
	private $table_name = "product_img";


    public function get_all(){
		$query = $this->db->get($this->table_name);
		return $query->result();
    }

   
    public function get_one($id){
    	$query = $this->db->where("id",$id)->get($this->table_name);
    	return $query->row();
    }
  
  	public function get_by_product_id($product_id){
    	$query = $this->db->where("product_id",$product_id)->limit(4)->get($this->table_name);
		return $query->result();
  	}


}