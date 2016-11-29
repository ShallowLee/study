<?php
	class A{
		function __construct(){
			echo "init a";
		}
	}

	class B extends A{
		function __construct(){
			parent::__construct();
			echo "init b";
		}
	}

	$b =  new B();
