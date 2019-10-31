<DOCTYPE !html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Carsharing</title>
		<link rel="stylesheet" type="text/css" href="../style/style.css">
	</head>
	<body>
			<!--Navigation---------------------------------------------------------------------------->
				<?php
						error_reporting(!E_ALL);
						session_start();
						$bnid = $_SESSION['ID'];
						$param = md5('NeinNeinNein');
						$von=$_SESSION['v'];
						$bis=$_SESSION['b'];
						$del = $_GET['Del'];
				
						echo "
						<ul>
							<li><a href='index.php?id=".$param."&lg=".$bnid."'>Startseite</a></li>
							<li><a href='funktion.php?id=".$param."&lg=".$bnid."'>So funktionierts</a></li>
							<li><a href='Fahrzeugmodelle.php?id=".$param."&lg=".$bnid."'>Fahrzuegmodelle</a></li>
							<li><a href='Reservieren.php?id=".$param."&lg=".$bnid."'>Reservieren</a></li>
							<li><a href='Reservationen.php?id=".$param."&lg=".$bnid."'>Reservierte Fahrzeuge</a></li>
						</ul>";
				?>
			<!--Ende Navigation----------------------------------------------------------------------->
				<br>
				<br>
			<!--Seiteninhalt-------------------------------------------------------------------------->
				<div class="titel">
					<h1>Carsharing: Wählen Sie Ihr Fahrzeug</h1> <!--Titel-->
				</div>
				<div class="kriterien">
		<?php
		include '../scripts/connection.php';
		

		$ort=$_GET['ort'];
		
					if($_GET['res'] != "")
					{
						$resu = $_GET['res'];
						$sqld = "UPDATE `fahrzeuge` SET `BNID`='$bnid', `von`='$von', `bis`='$bis' WHERE ID='$resu'";
						$db->query($sqld);
						header('Location: Reservationen.php?id='.$param.'&lg='.$bnid);
					}
		

						if($ort == 'Chur')
						{
							$sql = "SELECT Modell, Wunsch, ID FROM fahrzeuge where Wunsch='Chur' AND von = 'NULL'";
							$db_erg = $db->query($sql);
						}
						else if($ort == 'Sargans')
						{
							$sql = "SELECT Modell, Wunsch, ID FROM fahrzeuge where Wunsch='Sargans' AND von = 'NULL' ";
							$db_erg = $db->query($sql);
							
						}
						else if ($ort == 'Ziegelbrueck')
						{
							$sql = "SELECT Modell, Wunsch, ID FROM fahrzeuge where Wunsch='Ziegelbruck' AND von = 'NULL' ";
							$db_erg = $db->query($sql);
				
						}
						else if($ort == 'Rapperswil')
						{
							$sql = "SELECT Modell, Wunsch, ID FROM fahrzeuge where Wunsch='Rapperswil' AND von = 'NULL'";
							$db_erg = $db->query($sql);
							
						}
						else{
							$sql = "SELECT Modell, Wunsch, ID FROM fahrzeuge WHERE von = 'NULL'";
							$db_erg = $db->query($sql);
							
						}
		
		
		
		echo "<table border='1'>";
						
			while ($zeile = mysqli_fetch_assoc($db_erg))
					{
						echo '<tr>';
						echo "<td>". $zeile['Modell'] . "</td>";
						echo "<td>". $zeile['Wunsch'] . "</td>";
						echo "<td> <a href='suchen.php?id=".$param."&lg=".$bnid."&res=".$zeile['ID']."&su=1>Reservieren</a></td>";
						echo "</tr>";
					}
					echo "</table>";
					

					  
	?>
	</div>
	</body>
</html>