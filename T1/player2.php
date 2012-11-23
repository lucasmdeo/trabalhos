<?php
require_once 'lib.php';
$sess = unserialize(file_get_contents("DB.txt"));
	if($sess['start']=='1'){
		$sess['player2']='1';
		$sess['player1']='0';
		$sess['p2name']=$_GET['name2'];
		$sess['p2email']=$_GET['email2'];
		$sess['start']='2';
	file_put_contents("DB.txt", serialize($sess));
}

$sess = unserialize(file_get_contents("DB.txt"));
$jogada11 = $sess['11'];
$jogada12 = $sess['12'];
$jogada13 = $sess['13'];
$jogada21 = $sess['21'];
$jogada22 = $sess['22'];
$jogada23 = $sess['23'];
$jogada31 = $sess['31'];
$jogada32 = $sess['32'];
$jogada33 = $sess['33'];
$j1name = $sess['p1name'];
$j1email = $sess['p1email'];
$j2name = $sess['p2name'];
$j2email = $sess['p2email'];

function imgSwapP1($position){
	$sess = unserialize(file_get_contents("DB.txt"));
	if(($position == 11)&&($sess['11']=='w.png')){
		$sess['11']='o.png';
		$sess['player2']='1';
		$sess['player1']='0';
	}
	if(($position == 12)&&($sess['12']=='w.png')){
		$sess['12']='o.png';
		$sess['player2']='1';
		$sess['player1']='0';
	}
	if(($position == 13)&&($sess['13']=='w.png')){
		$sess['13']='o.png';
		$sess['player2']='1';
		$sess['player1']='0';
	}
	if(($position == 21)&&($sess['21']=='w.png')){
		$sess['21']='o.png';
		$sess['player2']='1';
		$sess['player1']='0';
	}
	if(($position == 22)&&($sess['22']=='w.png')){
		$sess['22']='o.png';
		$sess['player2']='1';
		$sess['player1']='0';
	}
	if(($position == 23)&&($sess['23']=='w.png')){
		$sess['23']='o.png';
		$sess['player2']='1';
		$sess['player1']='0';
	}
	if(($position == 31)&&($sess['31']=='w.png')){
		$sess['31']='o.png';
		$sess['player2']='1';
		$sess['player1']='0';
	}
	if(($position == 32)&&($sess['32']=='w.png')){
		$sess['32']='o.png';
		$sess['player2']='1';
		$sess['player1']='0';
	}
	if(($position == 33)&&($sess['33']=='w.png')){
		$sess['33']='o.png';
		$sess['player2']='1';
		$sess['player1']='0';
	}
	file_put_contents("DB.txt", serialize($sess));
}
winner();	
if(($sess['player2']=='0')&&($sess['winner']=='0')){
	if(isset($_GET['pos'])) {
		$pos = $_GET['pos'];
		imgSwapP1($pos);
	}
}
?>

<?php
	require_once 'lib.php';
 	cabecalho("Tic Tac Toe - Player 2"); 
 	?>
 	<div>
		<form method="GET">
		<b id="title"><?php echo "$j1name X $j2name" ?></b><br>
		<?php if(($sess['player2']=='0')&&($sess['winner']=='0')){
			echo '<center><b id="link2">Your turn</b></center>';
		}
		if(($sess['player2']=='1')&&($sess['winner']=='0')){
			echo "<center><b id='link2'>$j1name turn</b></center>";
		}
		if(($sess['winner']=='1')||($sess['winner']=='2')||($sess['winner']=='3')){
			if($sess['winner']=='1'){
				echo'<center><b id="link2">You LOOSE!</b></center>';
				}
			if($sess['winner']=='2'){
				echo'<center><b id="link2">You WIN!</b></center>';
				}
			if($sess['winner']=='3'){
				echo'<center><b id="link2">DRAW!</b></center>';
				}
			} ?>
				<table>	
					<tr>
						<td><a href="player2.php?pos=11"><img src="<?php echo $jogada11 ?>"></a></td>
						<td><a href="player2.php?pos=12"><img src="<?php echo $jogada12 ?>"></a></td>
						<td><a href="player2.php?pos=13"><img src="<?php echo $jogada13 ?>"></a></td>
					</tr>
					<tr>
						<td><a href="player2.php?pos=21"><img src="<?php echo $jogada21 ?>"></a></td>
						<td><a href="player2.php?pos=22"><img src="<?php echo $jogada22 ?>"></a></td>
						<td><a href="player2.php?pos=23"><img src="<?php echo $jogada23 ?>"></a></td>
					</tr>
					<tr>
						<td><a href="player2.php?pos=31"><img src="<?php echo $jogada31 ?>"></a></td>
						<td><a href="player2.php?pos=32"><img src="<?php echo $jogada32 ?>"></a></td>
						<td><a href="player2.php?pos=33"><img src="<?php echo $jogada33 ?>"></a></td>
					</tr>
				</table>
		</form>
			<br><br><b id="link">Copyright - Lucas Martins de Oliveira</b>
			</div>
	</body>
</html>		
