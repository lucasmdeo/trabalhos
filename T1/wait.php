<?php
	require_once 'lib.php';
	$sess = unserialize(file_get_contents("DB.txt"));
		if($sess['player2']=='1'){
			$sess['player1']='0';
			$sess['start']='1';
			file_put_contents("DB.txt", serialize($sess));
			header("location: player1.php");
		}
		else{
			cabecalhoWait("Stop Room");
			echo "<p>Link para segundo jogador: http://lucasmartins.phpfogapp.com/T1/player2.php</p>";
			echo '<br/>';
			rodape();
		}