<?php
	require_once 'lib.php';
	inicio();
		echo '<center><c>Altera��o de permiss�es</c></center><hr/>';
	echo'<divcadastro>';
		echo '<br/>';
			if(!isset($_GET['permicao'])){  //se nao ocorreu a primeiro caonsulta
			
				if(isset($_GET['erro'])){
				if($_GET['erro']==1){
					echo '<b>!!Existem campos nulos, favor verificar!!</b><br/>';
				}
				if($_GET['erro']==2){
					echo '<b>!!Este cadastro n�o existe em nossos servidores!!</b><br/>';
				}
			}
			echo'Digite o email que voc� est� procurando:';
			echo '<form action="validacaoAlteracao.php?pg=index.php" method="post">';
				echo 'Email:  <input type="text" name="e"/><br/>';
				echo '<input type="submit" value="Enviar"/><br/>';
			
			}
			else{   // se ja ocorreu a primeira consulta
				echo '<center>Dados do cadastro a ser alterado:</center><br/><br/>';
				$e = $_GET['email'];
				$_SESSION['emailc'] = $e;
				$n = $_GET['nome'];
				$p = $_GET['permicao'];
					echo "Nome: $n <br/>";
					if($p<=1){
						$p = "Usuario";
					}
					if($p==2){
						$p = "Funcionario";
					}
					if($p>=3){
						$p = "Gerente";
					}
					//echo "email: $e";
					echo "Permiss�o: $p <br/><br/>";
					echo '<form action="validacaoAlteracao.php?alt=2&e=1.php" method="post">';
					echo 'Nova Permiss�o:  <input type="text" name="p"/> (1-Usuario, 2-Funcionario, 3-Gerente)<br/>';
					echo '<input type="submit" value="Enviar"/><br/>';
			}
			echo '</form><br/><br/><a href="index.php"> Voltar para a p�gina principal. </a>';
	echo '</divcadastro>';
fim();
?>