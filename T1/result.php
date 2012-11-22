<?php
require_once '/lib.php';
	$sess = unserialize(file_get_contents("DB.txt"));
	$k = unserialize(file_get_contents("CONT.txt"));
		if($k==9){
			echo "Draw";
		}
		else if($sess['winner']=='1'){
			echo "The winner is: player 1";
		}
		else{
			echo "The winner is: player 2";
		}