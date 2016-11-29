<?php

class Catalog_model extends CI_Model {
    public function get_all(){
       $query = $this->db->get('catalog');
       return $query->result();
    }
}