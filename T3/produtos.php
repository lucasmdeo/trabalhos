<?php
	require_once 'lib.php';
	inicio();
	if(isset($_GET['cat'])){
		$c=$_GET['cat'];	
	//echo '<divconteudo>';	//div do conteudo
		if($c==1){
			echo '<center><c>Arbustos</c></center><hr/>';
				$l = dbConsulta("select * from arbusto where cod<4");
					if(mysql_num_rows($l)>0){	
						for($i=0;$i<3;$i++){
														
						}
					}
		}
		if($c==2){
			echo '<center><c>�rvores</c></center><hr/>';
				dbConsulta("select * from arvore where cod<4");
		}
		if($c==3){
			echo '<center><c>Flores</c></center><hr/>';
				dbConsulta("select * from flor where cod<4");
		}
		
		echo '<div10>';		//1� produto
			echo '<div20><img src="banner/sem_imagem.png" width="100%" height="150px"/></div20>';		//1� imagem
		echo '</div10>';	//1� produto
		echo '<div11>';		//2� produto
			echo '<div20><img src="banner/sem_imagem.png" width="100%" height="150px"/></div20>';		//2�imagem
		echo '</div11>';	//2� produto
		echo '<div12>';		//3� produto
			echo '<div20><img src="banner/sem_imagem.png" width="100%" height="150px"/></div20>';		//3� imagem
		echo '</div12>';	//3� produto
		
	//echo '</divconteudo>';	//div do conteudo
	}
	else{
		header("location: index.php");
	}
fim();
?>