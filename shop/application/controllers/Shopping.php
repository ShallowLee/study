<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shopping extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('user_is_login')){
			redirect("user/login");
		}
	}

	public function addToCart()
	{
		$this->load->model('User_model');
		$user_id = $this->session->userdata('user_id');
		$product_id = $this->input->post('product_id');
		$num = $this->input->post('num');
		if($this->User_model->product_in_cart($user_id,$product_id)){
			$this->User_model->update_cart($user_id,$product_id,$num);
		}else{
			$this->User_model->add_to_cart($user_id,$product_id,$num);
		}

		redirect("product/detail/".$product_id);

	}

	public function updateCart(){
		$id = $this->input->get('id');
		$num = $this->input->get('num');
		if($num > 0){
			$this->load->model('User_model');
			$this->User_model->update_cart_by_id($id,$num);
			echo "ok";
		}else{
			echo "数量不能小于0";
		}
		
	}

	public function cartList(){
		$this->load->model('User_model');
		$this->load->model('Products_model');
		$user_id = $this->session->userdata('user_id');
		$data = array(
			'carts'=>$this->User_model->get_cart($user_id)
		);
		$this->load->view('Shopping_cartList',$data);
	}

	public function cartdel($id){
		$this->load->model('User_model');	
		$this->User_model->cartdel($id);
		redirect('Shopping/cartList');
	}

	public function cartdels(){
		$this->load->model('User_model');
		$ids = $this->input->post('ids');
		//$this->User_model->cartdels($ids);
		echo "ok";
	}
}
