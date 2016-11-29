<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function detail($id)
	{
		$this->load->model('Products_model');
		$this->load->model('Products_img_model');
		$data = array(
			'product'=>$this->Products_model->get_one($id),
			'imgs'=>$this->Products_img_model->get_by_product_id($id)
		);
		$this->load->view('product_detail',$data);
	}

	public function lists($cata_id){
		$this->load->model('Products_catalog_model');
		$catalog = $this->Products_catalog_model->get_one($cata_id);
		if($catalog->parent_id == 0){
			$children_catalogs = $this->Products_catalog_model->get_by_cata_id($cata_id);
			redirect('product/lists/'.$children_catalogs[0]->id);
		}

		$this->load->model('Products_model');
		$this->load->model('Products_img_model');
<<<<<<< HEAD

		$brand_id= $this->input->get('brand');
=======
	
		$brand_id = $this->input->get('brand');	
>>>>>>> origin/master

		$data = array(
			'catalog'=>$catalog,
			'brands'=>$this->Products_model->get_brand_by_cata_id($cata_id),
			'parent_catalog'=>$this->Products_catalog_model->get_one($catalog->parent_id),
			'children_catalogs'=>$this->Products_catalog_model->get_by_cata_id($catalog->parent_id),
<<<<<<< HEAD
			'products'=> $this->Products_model->get_product_by_cata_id($cata_id,$brand_id),
			'brands'=>$this->Products_model->get_brand_by_cata_id($cata_id)
=======
			'products'=>$this->Products_model->get_product_by_cata_id($cata_id,$brand_id)
>>>>>>> origin/master
		);
		
		$this->load->view('product_lists',$data);
	}
}
