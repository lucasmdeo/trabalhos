<?php
	function cabecalho($nomePag){
		echo '<!DOCTYPE html>';
		echo '<html lang="en-GB">';
		echo '<head>';
		echo '<link rel="stylesheet" type="text/css" href="style.css"/>';
		echo '<meta http-equiv="refresh" content="1">';
		echo '<meta charset="utf-8">';
		echo "<title>$nomePag</title>";
		echo '</head>';
		echo '<body>';
	}
	
	function cabecalhoWait($nomePag){
		echo '<!DOCTYPE html>';
		echo '<html lang="en-GB">';
		echo '<head>';
		echo '<link rel="stylesheet" type="text/css" href="style.css"/>';
		echo '<meta charset="utf-8">';
		echo "<title>$nomePag</title>";
		echo '</head>';
		echo '<body>';
	}

	function rodape(){
		echo "<br>Copyright - Lucas Martins de Oliveira</br>";
			echo '</body>';
			echo '</html>';

	}

	function winner(){
		$sess = unserialize(file_get_contents("DB.txt"));
		
		if(($sess['11']!='w.png')&&($sess['12']!='w.png')&&($sess['13']!='w.png')&&($sess['21']!='w.png')&&($sess['22']!='w.png')&&($sess['23']!='w.png')&&($sess['31']!='w.png')&&($sess['32']!='w.png')&&($sess['33']!='w.png')){
			$sess['winner']='3';
			file_put_contents("DB.txt", serialize($sess));
		}
		//testa vitorias do jogador 1
			if(($sess['11']=='x.png')&&($sess['12']=='x.png')&&($sess['13']=='x.png')){
				$sess['winner']='1';
				file_put_contents("DB.txt", serialize($sess));
			}
			if(($sess['21']=='x.png')&&($sess['22']=='x.png')&&($sess['23']=='x.png')){
				$sess['winner']='1';
				file_put_contents("DB.txt", serialize($sess));
			}
			if(($sess['31']=='x.png')&&($sess['32']=='x.png')&&($sess['33']=='x.png')){
				$sess['winner']='1';
				file_put_contents("DB.txt", serialize($sess));
			}
			if(($sess['11']=='x.png')&&($sess['21']=='x.png')&&($sess['31']=='x.png')){
				$sess['winner']='1';
				file_put_contents("DB.txt", serialize($sess));
			}
			if(($sess['12']=='x.png')&&($sess['22']=='x.png')&&($sess['32']=='x.png')){
				$sess['winner']='1';
				file_put_contents("DB.txt", serialize($sess));
			}
			if(($sess['13']=='x.png')&&($sess['23']=='x.png')&&($sess['33']=='x.png')){
				$sess['winner']='1';
				file_put_contents("DB.txt", serialize($sess));
			}
			if(($sess['11']=='x.png')&&($sess['22']=='x.png')&&($sess['33']=='x.png')){
				$sess['winner']='1';
				file_put_contents("DB.txt", serialize($sess));
			}
			if(($sess['13']=='x.png')&&($sess['22']=='x.png')&&($sess['31']=='x.png')){
				$sess['winner']='1';
				file_put_contents("DB.txt", serialize($sess));
			}
			
			//testa vitorias do jogador 2
			if(($sess['11']=='o.png')&&($sess['12']=='o.png')&&($sess['13']=='o.png')){
				$sess['winner']='2';
				file_put_contents("DB.txt", serialize($sess));
			}
			if(($sess['21']=='o.png')&&($sess['22']=='o.png')&&($sess['23']=='o.png')){
				$sess['winner']='2';
				file_put_contents("DB.txt", serialize($sess));
			}
			if(($sess['31']=='o.png')&&($sess['32']=='o.png')&&($sess['33']=='o.png')){
				$sess['winner']='2';
				file_put_contents("DB.txt", serialize($sess));
			}
			if(($sess['11']=='o.png')&&($sess['21']=='o.png')&&($sess['31']=='o.png')){
				$sess['winner']='2';
				file_put_contents("DB.txt", serialize($sess));
			}
			if(($sess['12']=='o.png')&&($sess['22']=='o.png')&&($sess['32']=='o.png')){
				$sess['winner']='2';
				file_put_contents("DB.txt", serialize($sess));
			}
			if(($sess['13']=='o.png')&&($sess['23']=='o.png')&&($sess['33']=='o.png')){
				$sess['winner']='2';
				file_put_contents("DB.txt", serialize($sess));
			}
			if(($sess['11']=='o.png')&&($sess['22']=='o.png')&&($sess['33']=='o.png')){
				$sess['winner']='2';
				file_put_contents("DB.txt", serialize($sess));
			}
			if(($sess['13']=='o.png')&&($sess['22']=='o.png')&&($sess['31']=='o.png')){
				$sess['winner']='2';
				file_put_contents("DB.txt", serialize($sess));
			}
			
	}
	?>