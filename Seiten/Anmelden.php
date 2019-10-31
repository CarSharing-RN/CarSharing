<DOCTYPE !html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Carsharing</title>
		<link rel="stylesheet" type="text/css" href="../style/style.css">
	</head>
	<body>
			<!--Navigation---------------------------------------------------------------------------->
				<ul>
					<li><a href="index.php?id=0">Startseite</a></li>
					<li><a href="funktion.php?id=0">So funktionierts</a></li>
					<li><a href="Fahrzeugmodelle.php?id=0">Fahrzuegmodelle</a></li>
					<li><a href="Reservieren.php?id=0">Reservieren</a></li>
					<li><a class="active" href="Anmelden.php?id=0">Anmleden</a></li>
				</ul>
			<!--Ende Navigation----------------------------------------------------------------------->
			<br>
			<br>
			<!--Seiteninhalt-------------------------------------------------------------------------->
				<div class="titel">
					<h1>Carsharing: Anmeldung</h1>
				</div>
				<br>
				<div class="anmelden">
					<form action="Anmelden.php" method="post">
					  <p>Benutzername</p>
						<input type="text" placeholder="Ihr Benutzername" name="bn" required>
					  <p>Passwort</p>
						<input type="password" placeholder="Ihr Passwort" name="pw" required>
						<br>
						<br>
						<input type="submit" name="anmelden" value="Anmelden">
					</form>
					<br>
					<p>Sie haben noch keinen Benutzer?</p>
					<a href="registrieren.php">Hier Registrieren</a>
					<br>
					<br>
				<?php
					
					include '../scripts/connection.php';
					
					session_start();
					
					if(isset($_POST['anmelden'])) //prüfen ob Anmelden geklickt wurde
					{
						$benutzer = $_POST['bn']; //benutzername in variable speichern
						$Passwort = $_POST['pw']; //passwort in variable speichern
						
						$Passwortmd5 = md5($Passwort); //passwort md5 verschlüsseln
						
						//-------------------------------------------------------Abfrage ob Benutzerdaten korrekt sind------------------------//

						$sql = "SELECT ID FROM benutzer WHERE Benutzername='$benutzer' && Passwort='$Passwortmd5'";

						$result = $db->query($sql); //Datenbankabfrage ausführen
						
						$dsatz = mysqli_fetch_assoc($result); //array aus abfrage bilden
						
						$bnid=md5($dsatz['ID']); //User ID in md5 verschlüsseln
						
						$ang = md5('NeinNeinNein'); //Parameter für Angemeldet
						
						if(!$dsatz)
						{
							echo "Anmeldung Fehlgeschlagen. Bitte überprüfen sie Ihre eingaben und Versuchen sie es erneut";
						}
						else
						{
							$_SESSION['ID'] = $bnid;
							header('Location: index.php?id='.$ang.'&lg='.$bnid.'');
						}
						//------------------------------------------------------Ende Abfrage ob Benutzerdaten korrekt sind---------------------//
					}
				
				?>
				</div>
	</body>

</html>