<?php
	$file = "data.txt";
	function add($data){
		global $file;
		$data[] = time();
		//把$data数据打包成字符串
		$data = implode(",", $data).";";
		//把字符串保存到文件中
		file_put_contents($file, $data, FILE_APPEND);
	}

	function edit($id,$post){
		global $file;	
		//从文件中读取数据并用;号打散，保存到数组中。
		$data = explode( ";",file_get_contents($file));
		//修改id对应下标的数据。
		$data[$id] = $post;
		//打包成字符串
		$data = implode(";", $data);
		//保存到文件
		file_put_contents($file, $data);
	}
	function del($id){
		global $file;
		//从文件中读取数据并用;号打散，保存到数组中。
		$data = explode( ";",file_get_contents($file));
		//删除对应下标的文件
		unset($data[$id]);
		//打包成字符串
		$data = implode(";", $data);
		//保存到文件
		file_put_contents($file, $data);
	}
	function get($id){
		$data = getAll();
		return $data[$id];	
	}
	function getAll(){
		global $file;
		//从文件中读取数据并用;号打散，保存到数组中。
		$data = explode( ";",file_get_contents($file));
		return $data;	
	
	}
	function redirect($url){
		header("Location:".$url);
	}