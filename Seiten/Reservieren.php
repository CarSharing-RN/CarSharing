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
					session_start();
					
					$param = $_SESSION['ANG'];
					$bnid = $_SESSION['ID'];
					
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
					<form  action="Reservieren.php" method='get'>
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
					$ort = $_GET['foto'];
					if(isset($_GET['suchen']))
					{
						if($_SESSION['ANG'] != "")
						{
						$von = $_GET['von'];
						$bis = $_GET['bis'];
						$heute = date("Y-m-d");
						
						if($von > $heute && $bis > $heute && $von <= $bis)
						{
							
						
						
						$_SESSION['v'] = $von;
						$_SESSION['b'] = $bis;
						
						if($ort == 'Chur')
						{
							header('Location: suchen.php?id='.$param.'&lg='.$bnid.'&ort=Chur&von'.$von.'&bis='.$bis);
						}
						else if($ort == 'Sargans')
						{
							header('Location: suchen.php?id='.$param.'&lg='.$bnid.'&ort=Sargans&von'.$von.'&bis='.$bis);
						}
						else if ($ort == 'Ziegelbrueck')
						{
							header('Location: suchen.php?id='.$param.'&lg='.$bnid.'&ort=Ziegelbrueck&von'.$von.'&bis='.$bis);
						}
						else if($ort == 'Rapperswil')
						{
							header('Location: suchen.php?id='.$param.'&lg='.$bnid.'&ort=Rapperswil&von'.$von.'&bis='.$bis);
						}
						else{
							header('Location: suchen.php?id='.$param.'&lg='.$bnid.'&ort=&von'.$von.'&bis='.$bis);
						}			
						}
						else
						{
							echo "Bitte geben Sie ein korrektes Datum ein.";
						}	
						}
						else
						{
							echo "Sie müssen sich Anmelden um ein Fahrzeug Reservieren zu können.";
						}
					}
					

					

					?> 
				</div>

	</body>
</html>