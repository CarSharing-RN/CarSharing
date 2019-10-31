<DOCTYPE !html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Carsharing</title>
		<link rel="stylesheet" type="text/css" href="../style/style.css">
	</head>
	<body onload="initialize()" onunload="GUnload()">
			<!--Navigation---------------------------------------------------------------------------->
				<?php
					error_reporting(!E_ALL);
					
					if($_GET['t'] != '1')
					{	
					$param = $_GET['id'];
					$bnid = $_GET['lg'];
					}
					if($param == md5('NeinNeinNein'))
					{
						echo "
						<ul>
							<li><a href='index.php?id=".$param."&lg=".$bnid."'>Startseite</a></li>
							<li><a href='funktion.php?id=".$param."&lg=".$bnid."'>So funktionierts</a></li>
							<li><a href='Fahrzeugmodelle.php?id=".$param."&lg=".$bnid."'>Fahrzuegmodelle</a></li>
							<li><a class='active' href='Reservieren.php?id=".$param."&lg=".$bnid."'>Reservieren</a></li>
							<li><a href='Reservationen.php?id=".$param."&lg=".$bnid."'>Reservierte Fahrzeuge</a></li>
						</ul>";
					}
					else
					{
						echo "
						<ul>
							<li><a href='index.php?id=0'>Startseite</a></li>
							<li><a href='funktion.php?id=0'>So funktionierts</a></li>
							<li><a href='Fahrzeugmodelle.php?id=0'>Fahrzuegmodelle</a></li>
							<li><a class='active' href='Reservieren.php?id=0'>Reservieren</a></li>
							<li><a href='Anmelden.php?id=0'>Anmelden</a></li>
						</ul>";
					}
				?>
			<!--Ende Navigation----------------------------------------------------------------------->
				<br>
				<br>
			<!--Seiteninhalt-------------------------------------------------------------------------->
				<div class="titel">
					<h1>Carsharing: Fahrzeuge reservieren</h1> <!--Titel-->
				</div>
				
				<div class="kriterien">
					<h3>Hier können Sie den Zeitraum für die Reservation auswählen.</h3> 
					<form  action="Reservieren.php?t=1" method='post'>
					<br>
						Von: <input type="date" name="von" required>
					<br>
						Bis: <input type="date" name="bis" required>
						</br>
						</br>
						<h3>Nennen Sie uns Ihr Wunschort.</h3> 
						<input type="radio" name="foto" value="Chur">Bahnhof Chur
							<img src="../bilder/foto.png" alt="Bhf Chur" width="250" height="250">
						</input>
						<input type="radio" name="foto" value="Sargans">Bahnhof Sargans
							<img src="../bilder/foto2.png" alt="Bhf Sargans" width="250" height="250">
						</input>
						</br></br>
						<input type="radio" name="foto" value="Ziegelbrueck">Bahnhof Ziegelbrücke
							<img src="../bilder/foto3.png" alt="Bhf Ziegelbruecke" width="250" height="250">
						</input>
						<input type="radio" name="foto" value="Rapperswil">Bahnhof Rapperswil
							<img src="../bilder/foto4.png" alt="Bhf Rapperswil" width="250" height="250">
						</input>
						</br></br>
						<input type="submit" name="suchen" value="Fahrzeuge Suchen">
					</form>
					</div>
					<div class="fahrzeuge">
					<?php
					$ort = $_POST['foto'];
					echo $ort;
					if($bnid != "")
					{
					if(isset($_POST['suchen']))
					{
						
						
						$sql;
						$von = $_POST['von'];
						$bis = $_POST['bis'];
						
						if($ort == 'Chur')
						{
							$sql = "SELECT Modell, Wunsch, ID FROM fahrzeuge where Modell='Chur' AND von = 'NULL'";
							header('Location: suchen.php?id='.$param.'&lg='.$bnid.'&ort=Chur&von'.$von.'&bis='.$bis);
						}
						else if($ort == 'Sargans')
						{
							$sql = "SELECT Modell, Wunsch, ID FROM fahrzeuge where Modell='Sargans' AND von = 'NULL' ";
							header('Location: suchen.php?id='.$param.'&lg='.$bnid.'&ort=Sargans&von'.$von.'&bis='.$bis);
							echo "test";
						}
						else if ($ort == 'Ziegelbrueck')
						{
							$sql = "SELECT Modell, Wunsch, ID FROM fahrzeuge where Modell='Ziegelbruck' AND von = 'NULL' ";
							header('Location: suchen.php?id='.$param.'&lg='.$bnid.'&ort=Ziegelbrueck&von'.$von.'&bis='.$bis);
						}
						else if($ort == 'Rapperswil')
						{
							$sql = "SELECT Modell, Wunsch, ID FROM fahrzeuge where Modell='Rapperswil' AND von = 'NULL'";
							header('Location: suchen.php?id='.$param.'&lg='.$bnid.'&ort=Rapperswil&von'.$von.'&bis='.$bis);
						}
						else{
							$sql = "SELECT Modell, Wunsch, ID FROM fahrzeuge WHERE von = 'NULL'";
							header('Location: suchen.php?id='.$param.'&lg='.$bnid.'&ort=&von'.$von.'&bis='.$bis);
						}
						
						
					

					  
					}
					}
					else
					{
						echo "Sie müssen sich anmelden um Fahrzeuge suchen zu können";
					}
					

					?> 
				</div>

	</body>
</html>