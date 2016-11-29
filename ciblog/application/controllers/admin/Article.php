<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {
    public function __construct(){
        parent::__construct();
        if(!$this->session->userdata('is_login')){
            redirect("/admin/auth/login");
        }
    }
	public function index($page=1){
        $this->load->model("Article_model");
        $total = $this->Article_model->count_all();
        $per_page = 10;
        $data = array(
            "articles"=>$this->Article_model->get_by_page($page,$per_page)
        );
        $this->load->library('pagination');
        $config['base_url'] = site_url('/admin/article/index/');
        $config['total_rows'] = $total;
        $config['per_page'] = $per_page;
        $this->pagination->initialize($config);
        $this->load->view('admin/Article_index',$data);
	}

    public function add(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('title', '标题', 'required');
        $this->form_validation->set_rules('catalog_id', '分类', 'required');
        $this->form_validation->set_rules('img', '图片', 'required');
        $this->form_validation->set_rules('desc', '描述', 'required');
        $this->form_validation->set_rules('content', '内容', 'required');
        if ($this->form_validation->run() == FALSE){
            $this->load->model("Catalog_model");
            $data = array(
                "catalogs"=> $this->Catalog_model->get_all(),
            );
            $this->load->view('admin/Article_form',$data);
        }else{
            echo "ok";
        }
    }

}
