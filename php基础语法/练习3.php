<?php

	//第二题
	for ($i=0; $i < 6; $i++) { 
		for ($j=0; $j < 6; $j++) { 
			echo rand(10,99)."&nbsp;";
		}
		echo "<br />";
	}
	//第三题
	$letters = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n",'o','p','q',"r",'s','t','u','v','w','x','y','z');
	$letters_encrypt = array("d","e","f","g","h","i","j","k","l","m","n",'o','p','q',"r",'s','t','u','v','w','x','y','z',"a","b","c");

	$encrypt = $str =  "forever youthful,forever weeping.";

	for ($j=0; $j <strlen($str) ; $j++) { 
		for ($i=0; $i < 26; $i++) {
			if($letters[$i] == $str[$j]){
				$encrypt[$j] = $letters_encrypt[$i];
			}
		}
	}
	echo $encrypt;

	//第四题


	$a = array(199,255,105,21,114);

	for ($j=0; $j < 5; $j++) { 
		$max_index = 0;
		for ($i=0; $i < 5-$j; $i++) {  //5=> 4,3,2,1
			if($a[$max_index] < $a[$i]){
				$max_index = $i;
			}
		}
		$temp = $a[4-$j]; // 4=>3,2,1,0
		$a[4-$j] = $a[$max_index];
		$a[$max_index] = $temp;
	}
	var_dump($a);

?>
