<?php
require_once 'lib.php';

	cabecalhoWait("Login");
	echo '<form action = "http://lucasmartins.phpfogapp.com/T1/player2.php" method = "get">';
	echo 'Name: <input type = "text" name = "name2"/><br>';
	echo 'Email: <input type = "text" name = "email2"/><br>';
	echo '<input type = "submit" value="enviar"/>';
	echo '</form>';
	rodape();
?>	
	
	