<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function login(){
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<span  class="help-block error">', '</span>');
        $this->form_validation->set_rules('username', '用户名', 'required');
        $this->form_validation->set_rules('password', '密码', 'required|callback__auth_check');
        if ($this->form_validation->run() == FALSE){
            $this->load->view('admin/login');
        }else{
            $this->session->set_userdata('is_login', true);
            redirect("/admin/article/index");
        }
	}
    public function _auth_check(){
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $this->load->model('Admin_model');
        if ($this->Admin_model->get_one($username,$password)){
            return TRUE;
        }else{
            $this->form_validation->set_message('_auth_check', '用户名或密码不正确.');
            return FALSE;
        }
    }
}
