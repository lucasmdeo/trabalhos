<?php
	require_once 'lib.php';
	inicio();
		echo '<center><c>Cadastro</c></center><hr/>';
	echo'<divcadastro>';
		echo '<br/>';
			if(isset($_GET['erro'])){
				if($_GET['erro']==1){
					echo '<b>!!Existem campos nulos, favor verificar!!</b><br/>';
				}
				if($_GET['erro']==2){
					echo '<b>!!Este cadastro já esxiste em nossos dados!!</b><br/>';
				}
			}
			echo '<form action="validacaoCadastro.php?pg=index.php" method="post">';
				echo 'Email:  <input type="text" name="e"/><br/>';
				echo 'Senha: <input type="text" name="s"/><br/>';
				echo 'Nome:  <input type="text" name="n"/><br/>';
				echo 'Sobrenome:  <input type="text" name="sn"/><br/>';
				echo 'Telefone:  <input type="text" name="t"/><br/>';
				echo 'Endereço: <input type="text" name="end"/><br/>';
				echo 'Data de nascimento: <input type="text" name="d"/>_aaaa/mm/dd<br/>';
				echo '<input type="submit" value="Enviar"/><br/>';
			echo '</form><br/><br/><a href="index.php"> Voltar para a página principal. </a>';
	echo '</divcadastro>';
	fim();
?>