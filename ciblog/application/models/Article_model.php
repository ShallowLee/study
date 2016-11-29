<?php

class Article_model extends CI_Model {
	private $table_name = "article";

    public function count_all(){
        return $this->db->count_all_results($this->table_name);
    }

    public function get_all(){
		$query = $this->db->get($this->table_name);
		return $query->result();
    }

    public function get_by_page($page,$page_size){
        $offset = ($page-1)*$page_size;
        $query = $this->db->order_by('title', 'DESC')->limit($page_size,$offset)->get($this->table_name);
        return $query->result();
    }

    public function get_one($id){
    	$query = $this->db->where("id",$id)->get($this->table_name);
    	return $query->row();
    }
    public function get_by_cata_id($cata_id){
    	$query = $this->db->where("catalog_id",$cata_id)->get($this->table_name);
    	return $query->result();
    }

    public function view_once($id){
    	$this->db->query("update $this->table_name set `view` = `view`+1 where `id`=$id");
    }
}