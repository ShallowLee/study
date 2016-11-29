<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {
	public $catalogs;
	public function __construct(){
		parent::__construct();
		$this->load->model('Catalog_model');
		$this->load->model('Article_model');
		$this->catalogs = $this->Catalog_model->get_all();
	}

	public function index(){
		$articles = $this->Article_model->get_all();
		$data = array(
			"catalogs"=>$this->catalogs,
			"articles"=>$articles,
			"catalog_id"=>0,
			);
		$this->load->view("article_index",$data);
	}

	public function view($id){
		$this->output->enable_profiler(TRUE);
		$article = $this->Article_model->get_one($id);
		$this->Article_model->view_once($id);
		$data = array(
			"catalogs"=>$this->catalogs,
			"article"=>$article,
			"catalog_id"=>$article->catalog_id,
			);
		$this->load->view("article_view",$data);
	}

	public function lists($cata_id){
		$articles = $this->Article_model->get_by_cata_id($cata_id);
		$data = array(
			"catalogs"=>$this->catalogs,
			"articles"=>$articles,
			"catalog_id"=>$cata_id,
			);
		$this->load->view("article_index",$data);
	}
}
