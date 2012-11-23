<?php
require_once 'lib.php';
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
	$sess['p2name']='unknow';
	$sess['p2email']='unknow';
	file_put_contents("DB.txt", serialize($sess));
	
	cabecalhoWait("Login");
	echo '<form action = "http://lucasmartins.phpfogapp.com/T1/player1.php" method = "get">';
	echo 'Name: <input type = "text" name = "name"/><br>';
	echo 'Email: <input type = "text" name = "email"/><br>';
	echo '<input type = "submit" value="enviar"/>';
	echo '</form>';
	rodape();
	?>
	