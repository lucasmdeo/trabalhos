<?php
	require_once 'Bd.php';
	session_start();
	
	$e = strip_tags($_REQUEST['e']);
	$e = addslashes($e);

	if(isset($_GET['alt'])){
			$p = strip_tags($_POST['p']);
			$p = addslashes($p);
			$e=$_SESSION['emailc'];
		dbConsulta("update usuario set permicao = '$p' where email='$e'");
		header("location: quemsomos.php");
	}
	
	else{
		if($e==null){
			header("location: alteracao.php?erro=1");
		}
	$l = dbConsulta("select email,nome,sobrenome,permicao from usuario where email='$e'");
	
	if(mysql_num_rows($l)>0){
		$r = mysql_fetch_array($l);
		$e = $r['email'];
		$n = $r['nome']." ".$r['sobrenome'];
		$p = $r['permicao'];
		header("location: alteracao.php?nome=$n&permicao=$p&email=$e");
	}
	else{
		header("location: alteracao.php?erro=2");
	}
	}
	//header("location: alteracaoConcluido.php");
	
?>