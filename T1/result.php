<?php
require_once 'http://lucasmartins.phpfogapp.com/T1/lib.php';
	$sess = unserialize(file_get_contents("DB.txt"));
		if($k==9){
			echo "Draw";
		}
		else if($sess['winner']=='1'){
			echo "The winner is: player 1";
		}
		else{
			echo "The winner is: player 2";
		}