<?php
	require_once 'Bd.php';
	session_start();
	$e = strip_tags($_POST['n']);
	$e = addslashes($e);
	$s = strip_tags($_POST['s']);
	$s = addslashes($s);
	$loc = $_GET['pg'];
	
	$sal = "euvoutirar10notrabalho";
	//add funcao md5 para senha com sal
	$hash = $s.$sal;
	$hash = md5($hash);
	
	$l = dbConsulta("select email,nome,sobrenome,permicao from usuario where email='$e' and senha='$hash'");
	
	if(mysql_num_rows($l)>0){
		$r = mysql_fetch_array($l);
		$_SESSION['e'] = $r['email'];
		$_SESSION['n'] = $r['nome'];
		$_SESSION['sn'] = $r['sobrenome'];
		$_SESSION['p'] = $r['permicao'];
		
		header("location: index.php");
		}
	else{
		echo "nenhum usuario cadastrado com este email";
		$_SESSION['val'] = 1;
		header("location: index.php");
	}
?>