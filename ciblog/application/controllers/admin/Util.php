<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Util extends CI_Controller {
	public function upload(){
        if($_FILES['file']['error'] > 0){
            exit("上传错误");
        }else{
            $path = './uploads/'.$_FILES['file']['name'];
            move_uploaded_file($_FILES['file']['tmp_name'],$path);
            echo 'uploads/'.$_FILES['file']['name'];
        }
	}
    
}
