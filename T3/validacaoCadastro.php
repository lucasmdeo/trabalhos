<?php
	require_once 'Bd.php';
	session_start();
	
	$e = strip_tags($_POST['e']);
	$e = addslashes($e);
	$s = strip_tags($_POST['s']);
	$s = addslashes($s);
	$n = strip_tags($_POST['n']);
	$n = addslashes($n);
	$sn = strip_tags($_POST['sn']);
	$sn = addslashes($sn);
	$d = strip_tags($_POST['d']);
	$d = addslashes($d);
	$t = strip_tags($_POST['t']);
	$t = addslashes($t);
	$end = strip_tags($_POST['end']);
	$end = addslashes($end);
	
	if(($e==null)||($s==null)||($sn==null)||($end==null)||($d==null)||($t==null)||($n==null)){
		header("location: cadastro.php?erro=1");
	}
	
	$sal = "euvoutirar10notrabalho";
	$hash = $s.$sal;
	//add funcao md5 para senha com sal
	$hash = md5($hash);
	
	$l = dbConsulta("select email from usuario");
	$ln = dbConsulta("select email from usuario where email='$e'");
	
	if(mysql_num_rows($l)==0){
		if(mysql_num_rows($ln)==0){
			dbConsulta("insert into usuario(email,senha,nome,sobrenome,endereco,telefone,dtnasc,permicao) values('$e','$hash','$n','$sn','$end','$t','$d','3')");
		}
		else{
			header("location: cadastro.php?erro=2");
		}
	}
	else{
		if(mysql_num_rows($ln)==0){
		dbConsulta("insert into usuario values('$e','$hash','$n','$sn','$end','$t','$d','1')");
		}
		else{
			header("location: cadastro.php?erro=2");
		}
	}
	header("location: cadastroConcluido.php");
?>