<?php
	require_once 'lib.php';
	inicio();
	if((isset($_SESSION['p']))&&(($_SESSION['p'])>1)&&(isset($_GET['cat']))){
		$c = $_GET['cat'];
		echo '<center><c>Controle de estoque</c></center><hr/>';
		//echo '<div91><center>Nome</center><hr/></div91>';
		//echo '<div92><center>Nome Científico</center><hr/></div92>';
		//echo '<div93><center>Quantidade</center><hr/></div93>';
			if($c==1){
				$r = dbConsulta("select nome,nomeCientifico,quantidade from arbusto where 1");
				echo '<div90>';
				echo "<div91>Nome<hr/></div91>";
				echo "<div92>Nome Científico<hr/></div92>";
				echo "<div93>Quantidade<hr/></div93><br/><br/>";
				if(mysql_num_rows($r)>0){
					
					while($l = mysql_fetch_array($r)){
						$n = $l['nome'];
						$nc = $l['nomeCientifico'];
						$q = $l['quantidade'];
						echo "<div91>$n</div91>";
							echo "<div92>$nc</div92>";
							echo "<div93>$q</div93><br/>";
					}
					echo '</div90>';
				}
				}//c=1
			
			if($c==2){
				$r = dbConsulta("select nome,nomeCientifico,quantidade from arvore where 1");
				echo '<div90>';
				echo "<div91>Nome<hr/></div91>";
				echo "<div92>Nome Científico<hr/></div92>";
				echo "<div93>Quantidade<hr/></div93><br/><br/>";
				if(mysql_num_rows($r)>0){
					
					while($l = mysql_fetch_array($r)){
						$n = $l['nome'];
						$nc = $l['nomeCientifico'];
						$q = $l['quantidade'];
						echo "<div91>$n</div91>";
							echo "<div92>$nc</div92>";
							echo "<div93>$q</div93><br/>";
					}
					echo '</div90>';
				}
				}//c=2
				
				if($c==3){
					$r = dbConsulta("select nome,nomeCientifico,quantidade from flor where 1");
					echo '<div90>';
					echo "<div91>Nome<hr/></div91>";
					echo "<div92>Nome Científico<hr/></div92>";
					echo "<div93>Quantidade<hr/></div93><br/><br/>";
					if(mysql_num_rows($r)>0){
						
						while($l = mysql_fetch_array($r)){
							$n = $l['nome'];
							$nc = $l['nomeCientifico'];
							$q = $l['quantidade'];
							echo "<div91>$n</div91>";
							echo "<div92>$nc</div92>";
							echo "<div93>$q</div93><br/>";
							
						}
					echo '</div90>';
					}
				}//c=3
			
				echo '</div90>';
					
	}// teste de permissao
	else{
		header("location: index.php");
	}
	fim();
	?>