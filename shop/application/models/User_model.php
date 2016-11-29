<?php

class User_model extends CI_Model {
	private $table_name = "user";


    public function get_all(){
		$query = $this->db->get($this->table_name);
		return $query->result();
    }

    public function get_cart($user_id){
        $query = $this->db->where("user_id",$user_id)->get("user_cart");
        return $query->result(); 
    }

    public function cartdel($id){
        $this->db->where('id',$id)->delete('user_cart');
    }
    public function cartdels($ids){
        $this->db->where_in('id',$ids)->delete('user_cart');
    }

    public function product_in_cart($user_id,$product_id){
        $query = $this->db->where(array(
            'user_id'=>$user_id,
            'product_id'=>$product_id,
        ))->get('user_cart');
        return $query->row();
    }

    public function add_to_cart($user_id,$product_id,$num){
       $query = $this->db->insert('user_cart',array(
        'user_id'=>$user_id,
        'product_id'=>$product_id,
        'num'=>$num,
       ));
    }

    public function update_cart($user_id,$product_id,$num){
        $this->db->query("update `user_cart` set `num`=`num`+$num where `user_id` = $user_id and `product_id` = $product_id");
    }

    public function update_cart_by_id($id,$num){
        $this->db->where('id',$id)->update('user_cart',array(
            'num'=>$num
        ));
    }

    public function cart_count($user_id){
        $query = $this->db->where('user_id',$user_id)->get('user_cart');
        return count($query->result());
    }
   
    public function get_one($username,$password){
    	$query = $this->db->where(array(
            'username'=>$username,
            'password'=>$password,
            ))->get($this->table_name);
    	return $query->row();
    }
  
    public function get_by_name($username){
        $query = $this->db->where(array(
            'username'=>$username,
            ))->get($this->table_name);
        return $query->row();
    }

    public function add_user($username,$password){
        $this->db->insert($this->table_name,array(
            'username'=>$username,
            'password'=>md5($password),
            'create_time'=>time()
        ));
    }


}