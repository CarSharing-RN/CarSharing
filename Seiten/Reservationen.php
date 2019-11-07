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
					<h1>Carsharing: Meine reservierten Fahrzeuge</h1>
				</div>
				<div class="fahrzeuge">
				<?php
				
					include '../scripts/connection.php';
					if($del != "")
					{
						$sqld = "UPDATE `fahrzeuge` SET `BNID`='NULL', `von`='NULL', `bis`='NULL' WHERE ID='$del'";
						$db->query($sqld);
					}
					
					
					
					
					$sql = "SELECT * FROM fahrzeuge WHERE BNID='$bnid'";
					
					
					
					$db_erg = $db->query($sql);
					
					echo "<table border='1'>
							<tr>
								<td>Modell</td>
								<td>Standort</td>
								<td>Reserviert von</td>
								<td>Reserviert bis</td>
								<td>Stornieren</td>
							</tr>";
					
					while ($zeile = mysqli_fetch_assoc($db_erg))
					{
					  echo '<tr>';
					  echo "<td>". $zeile['Modell'] . "</td>";
					  echo "<td>". $zeile['Wunsch'] . "</td>";
					  echo "<td>". $zeile['von'] . "</td>";
					  echo "<td>". $zeile['bis'] . "</td>";
					  echo '<td> <a href=Reservationen.php?id='.$param.'&lg='.$bnid.'&Del='.$zeile["ID"].'>Fahrzeug Stornieren</a></td>';
					  echo "</tr>";
					}
					echo "</table>";
					
				?>
				</div>
	</body>

</html>