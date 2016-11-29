<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

<<<<<<< HEAD
	public function login(){
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<span  class="help-block error">', '</span>');
        $this->form_validation->set_rules('username', '用户名', 'required');
        $this->form_validation->set_rules('password', '密码', 'required|callback__auth_check');
        $this->form_validation->set_rules('verify', '验证码', 'required|callback__check_verify');
        if ($this->form_validation->run() == FALSE){
            $this->load->view('user_login');
        }else{
            $username = $this->input->post('username');
            $password = md5($this->input->post('password'));
            $user = $this->User_model->get_one($username,$password);
            $this->session->set_userdata('user_is_login', true);
            $this->session->set_userdata('user_name', $user->username);
            $this->session->set_userdata('user_id', $user->id);
            redirect("/front/index");
        }
	}
    public function _auth_check(){
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $this->load->model('User_model');
        if ($this->User_model->get_one($username,$password)){
            return TRUE;
        }else{
            $this->form_validation->set_message('_auth_check', '用户名或密码不正确.');
            return FALSE;
        }
    }
    public function _check_verify(){
		if ( $this->session->userdata('verify_num') == $this->input->post('verify') ){
            return TRUE;
        }else{
            $this->form_validation->set_message('_check_verify', '验证码不正确.');
            return FALSE;
        }
    }

    public function _check_user_is_exists(){
    	$username = $this->input->post('username');
    	if( $this->User_model->get_by_name($username) ){
            $this->form_validation->set_message('_check_user_is_exists', '用户名已存在.');
    		return FALSE;
    	}else{
    		return true;
    	}
    }

	public function regedit(){
        $this->load->model('User_model');
		$this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<span  class="help-block error">', '</span>');
        $this->form_validation->set_rules('username', '用户名', 'required|callback__check_user_is_exists');
        $this->form_validation->set_rules('password', '密码', 'required|min_length[6]|alpha_numeric');
        $this->form_validation->set_rules('password_repeat', '重复密码', 'required|matches[password]');
        $this->form_validation->set_rules('verify', '验证码', 'required|callback__check_verify');
        if ($this->form_validation->run() == FALSE){
            $this->load->view('user_regedit');
        }else{
        	$username = $this->input->post('username');
        	$password = $this->input->post('password');
        	$this->User_model->add_user($username,$password);
            redirect("/user/login");
        }
	}

	public function verify(){
		$random = rand(1000,9999);
		$this->session->set_userdata('verify_num', $random);
		header("Content-Type:image/png");
		$width = 100;
		$height = 30;
		$im = imagecreate($width, $height);
		$back = imagecolorallocate($im, 0xFF, 0xFF, 0xFF);
		$font = imagecolorallocate($im, 41, 163, 238);//颜色
		imagestring($im, 5, 7, 5, $random, $font);
		imagepng($im);
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('front/index');
	}
=======
	public function login()
	{
		$this->load->view('user_login');
	}

	public function regedit(){
		$this->load->view('user_regedit');
	}

>>>>>>> origin/master
}
