<?php

class Products_model extends CI_Model {
	private $table_name = "product";


    public function get_all(){
		$query = $this->db->limit(4)->get($this->table_name);
		return $query->result();
    }

   
    public function get_one($id){
    	$query = $this->db->where("id",$id)->get($this->table_name);
    	return $query->row();
    }
    /*用于获取当前分类id下和当前分类的子分类下的产品*/
<<<<<<< HEAD
    public function get_product_by_cata_id($cata_id,$brand_id=0){
=======
    public function get_product_by_cata_id($cata_id,$brand_id = null){
>>>>>>> origin/master
        $query = $this->db->where('parent_id',$cata_id)->get('product_catalog');
        $child_catalog = $query->result();
        $where = array($cata_id);
        foreach($child_catalog as $c){
            $where[] = $c->id;
        }
<<<<<<< HEAD
        $w = array();
        if($brand_id != false){
            $w['brand_id'] = $brand_id;
        }
        $query = $this->db->where_in('cata_id',$where)->where($w)->get($this->table_name);
=======
        $this->db->where_in('cata_id',$where);
        if(!empty($brand_id)){
            $this->db->where('brand_id',$brand_id);
        }
        $query = $this->db->get($this->table_name);
>>>>>>> origin/master
        return $query->result();
    }

    public function get_brand_by_cata_id($cata_id){
        $query = $this->db->where('cata_id',$cata_id)->distinct()->get($this->table_name);
        $catas = $query->result();
        $brand_ids = array();
        foreach($catas as $c){
            if($c->id >0){
                $brand_ids[] = $c->brand_id;
            }
        }
        if(empty($brand_ids)){
            return array();
        }else{
            $query = $this->db->where_in("id",$brand_ids)->get("product_brand");
            return $query->result();

        }
 
    }
  
  	public function get_by_catalog($cata_id){
		$query = $this->db->where(array('cata_id'=>$cata_id,'recommend'=>0))->limit(6)->get($this->table_name);
		return $query->result();
    }

    /*获取推荐产品*/
    public function get_recommend($cata_id){
		$query = $this->db->where(array('cata_id'=>$cata_id,'recommend'=>1))->get($this->table_name);
		return $query->row();
    }

    public function get_brand_by_cata_id($cata_id){
        $brands = $this->get_product_by_cata_id($cata_id);
        $brand_ids = array();
        foreach ($brands as $b) {
            $brand_ids[] = $b->brand_id;
        }
        $query = $this->db->where_in('id',$brand_ids)->get('product_brand');
        return $query->result();
    }
}