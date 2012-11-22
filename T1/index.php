<?php
	//criação do arquivo com imagens em branco
	$sess = unserialize(file_get_contents("DB.txt"));
	$sess['11']='w.png';
	$sess['12']='w.png';
	$sess['13']='w.png';
	$sess['21']='w.png';
	$sess['22']='w.png';
	$sess['23']='w.png';
	$sess['31']='w.png';
	$sess['32']='w.png';
	$sess['33']='w.png';
	$sess['player1']='1';
	$sess['player2']='0';
	$sess['winner']='0';
	$sess['start']='0';
	file_put_contents("DB.txt", serialize($sess));
	//encaminha para a pagina do player1
	header("location: wait.php");
	?>
	