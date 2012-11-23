<?php
require_once 'lib.php';
	$sess = unserialize(file_get_contents("DB.txt"));
		if($sess['winner']=='1'){
			echo "The winner is: player 1";
		}
		else{
			echo "The winner is: player 2";
		}
		?>