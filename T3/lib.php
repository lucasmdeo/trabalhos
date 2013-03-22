<?php
	function cabecalho($nome){
		echo '<!DOCTYPE html>';
		echo '<html>';
		echo '<head>';
			echo '<link rel="stylesheet" type="text/css" href="style.css"/>';
			echo "<title>$nome</title>";
		echo '</head>';
		echo '<body>';
	}
	
	function rodape(){
		echo '</body>';
		echo '</html>';
	}
	
	function inicio(){
		require_once 'Bd.php';
		session_start();
		
		cabecalho("Floricultura Aquarela");
		echo '<div6> </div6>';	//moldura preta esquerda
		echo '<div7> </div7>';	//moldura preta direita
		echo '<div5> </div5>';	//moldura preta logo
		echo '<div3>';
		echo '<b><center>Menu</center><hr/>Nossos produtos: </b><br/><hr/>';	//quadro verde da esquerda
		echo '<img src="banner/icone_flor.png" width="25px" hight=25px"/> <a href="produtos.php?cat=1">Arbustos</a><br/>';
		echo '<img src="banner/icone_flor.png" width="25px" hight=25px"/> <a href="produtos.php?cat=2">Árvores</a><br/>';
		echo '<img src="banner/icone_flor.png" width="25px" hight=25px"/> <a href="produtos.php?cat=3">Flores</a><hr/>';
		
		if(isset($_SESSION['p'])){
			if($_SESSION['p']>1){
				echo '<b>Estoque: </b><br/><hr/>';	//quadro verde da esquerda
				echo '<img src="banner/icone_flor.png" width="25px" hight=25px"/> <a href="ControleEstoque.php?cat=1">Tabela de arbustos</a><br/>';
				echo '<img src="banner/icone_flor.png" width="25px" hight=25px"/> <a href="ControleEstoque.php?cat=2">Tabela de árvores</a><br/>';
				echo '<img src="banner/icone_flor.png" width="25px" hight=25px"/> <a href="ControleEstoque.php?cat=3">Tabela de flores</a><hr/>';
			}
			if($_SESSION['p']>2){
				echo '<b>Cadastros: </b><br/><hr/>';	//quadro verde da esquerda
				echo '<img src="banner/icone_flor.png" width="25px" hight=25px"/> <a href="alteracao.php">Alterar permissões</a><hr/>';
			}
				
		}
		
		echo '<b>Empresa: </b><br/><hr/>';	//quadro verde da esquerda
		echo '<img src="banner/icone_flor.png" width="25px" hight=25px"/> <a href="quemsomos.php">Quem somos</a><br/>';
		
		echo '</div3>';
		echo '<div4>';	//quadro verde da direita
		if(!isset($_SESSION['e'])){
			echo '<br/>';
			echo '<form action="validacao.php" method="post">';
			echo 'Email:  <input type="text" name="n"/><br/>';
			echo 'Senha: <input type="text" name="s"/><br/>';
			echo '<input type="submit" value="Enviar"/><br/>';
			echo '</form><br/>';
			echo '<a href="cadastro.php">cadastre-se</a>';
		}
		else{
			$nome = $_SESSION['n']." ".$_SESSION['sn'];
			$email = $_SESSION['e'];
			echo "<br/>Nome: $nome<br/>";
			echo "Email: $email <br/><br/>";
			echo '<a href="sair.php?pg=index.php">Sair</a>';
		}
		
			if(isset($_SESSION['val'])){
					if($_SESSION['val']==1){
							echo "<br/>Erro no login ou senha";
				$_SESSION['val']=0;
			}
			else{
			$_SESSION['val']=0;
			}
		}
		
			echo '</div4>';
			//====================================================//
			//======================CONTEUDO======================//
			//====================================================//
			echo '<divconteudo>';	//div do conteudo
	}
	
	function fim(){
		echo '</divconteudo>';	//div do conteudo
		//====================================================//
		//=================FIM DOCONTEUDO=====================//
		//====================================================//
		
		echo '<div>'; //banner
		echo '<img src="banner/espaço.png" title="floricultura" width="50px" height="184px"/>';
		echo '<img src="banner/logo.png" title="floricultura" width="184px" height="184px"/>';
		echo '<img src="banner/espaço.png" title="floricultura" width="100px" height="184px"/>';
		echo '<img src="banner/nome_logo.png" title="floricultura" width="736px" height="184px"/>';
		echo '<img src="banner/telefones.png" title="floricultura" width="200px" height="50px"/>';
		
		rodape();
	}