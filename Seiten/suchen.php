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
			
				
						$bnid = $_GET['lg'];
						$param = $_GET['id'];
						$del = $_GET['Del'];
				
						echo "
						<ul>
							<li><a href='index.php?id=".$param."&lg=".$bnid."'>Startseite</a></li>
							<li><a href='funktion.php?id=".$param."&lg=".$bnid."'>So funktionierts</a></li>
							<li><a href='Fahrzeugmodelle.php?id=".$param."&lg=".$bnid."'>Fahrzuegmodelle</a></li>
							<li><a href='Reservieren.php?id=".$param."&lg=".$bnid."'>Reservieren</a></li>
							<li><a class='active' href='Reservationen.php?id=".$param."&lg=".$bnid."'>Reservierte Fahrzeuge</a></li>
						</ul>";
				?>
			<!--Ende Navigation----------------------------------------------------------------------->
				<br>
				<br>
			<!--Seiteninhalt-------------------------------------------------------------------------->
				<div class="titel">
					<h1>Carsharing: Wählen Sie Ihr Fahrzeug</h1> <!--Titel-->
				</div>
		<?php
		include '../scripts/connection.php';
		
		$von=$_GET['von'];
		$bis=$_GET['bis'];
		$bnid=$_GET['lg'];
		$ort=$_GET['ort'];
		echo $ort;
						if($ort == 'Chur')
						{
							$sql = "SELECT Modell, Wunsch, ID FROM fahrzeuge where Modell='Chur' AND von = 'NULL'";
							
						}
						else if($ort == 'Sargans')
						{
							$sql = "SELECT Modell, Wunsch, ID FROM fahrzeuge where Modell='Sargans' AND von = 'NULL' ";
							
						}
						else if ($ort == 'Ziegelbrueck')
						{
							$sql = "SELECT Modell, Wunsch, ID FROM fahrzeuge where Modell='Ziegelbruck' AND von = 'NULL' ";
				
						}
						else if($ort == 'Rapperswil')
						{
							$sql = "SELECT Modell, Wunsch, ID FROM fahrzeuge where Modell='Rapperswil' AND von = 'NULL'";
							
						}
						else{
							$sql = "SELECT Modell, Wunsch, ID FROM fahrzeuge WHERE von = 'NULL'";
							
						}
		
		$db_erg = $db->query($sql);
		
		echo "<table border='1'>";
						
			while ($zeile = mysqli_fetch_assoc($db_erg))
					{
						echo '<tr>';
						echo "<td>". $zeile['Modell'] . "</td>";
						echo "<td>". $zeile['Wunsch'] . "</td>";
						echo "<td> <a href='Reservationen.php?id=".$param."&lg=".$bnid."&res=".$zeile['ID']."&su=1>Reservieren</a></td>";
						echo "</tr>";
					}
					echo "</table>";
					
					if($_GET['res'] != "")
					{
						$resu = $_GET['res'];
						$sql="INSERT INTO fahrzeug (BNID,von,bis) VALUES ('$bnid', '$von', '$bis') WHERE ID='$resu'";
					}
					  
	?>
	</body>
</html>