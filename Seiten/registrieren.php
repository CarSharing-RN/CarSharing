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
					<li><a href="Anmelden.php?id=0">Anmleden</a></li>
				</ul>
			<!--Ende Navigation----------------------------------------------------------------------->
			<br>
			<br>
			<!--Seiteninhalt-------------------------------------------------------------------------->
				<div class="titel">
					<h1>Carsharing: Registrierung</h1>
				</div>
				<br>
				<div class="registrieren">
					<form action="registrieren.php" method="post">
					<p>Vorname</p>
						<input type="text" placeholder="Ihr Vorname" name="vn" required>
					<p>Nachname</p>
						<input type="text" placeholder="Ihr Nachname" name="nn" required>
					<p>Telefonnummer</p>
						<input type="number" placeholder="Ihre Telefonnummer" name="tel" required>
					<p>Email Adresse</p>
						<input type="email" placeholder="Ihre Email Adresse" name="email" required>
					<p>Benutzername</p>
						<input type="text" placeholder="Ihr Benutzername" name="bn" required>
					<p>Passwort</p>
						<input type="password" placeholder="Ihr Passwort" name="pw" required>
					<p>Passwort wiederholen</p>
						<input type="password" placeholder="Ihr Passwort wiederholen" name="pw1" required>
						<br>
						<br>
						<input type="submit" name="registrieren" value="Registrieren">
					</form>
				
				
				<?php
					error_reporting(!E_ALL);
					include '../scripts/connection.php';
					
					if($_POST['pw'] == $_POST['pw1'])
					{
						if(isset($_POST['registrieren'])) //prüfen ob Registrierung geklickt wurde
						{
							$vn = $_POST['vn']; //Vorname in Variabel Speichern
							$nn = $_POST['nn']; //Nachname in Variabel Speichern
							$tel = $_POST['tel']; //telefonnummer in Variabel Speichern
							$email = $_POST['email']; //Email in Variabel Speichern
							$bn = $_POST['bn']; //benutzername in variable speichern
							$pw = $_POST['pw']; //passwort in variable speichern
							
							$pwmd5 = md5($pw); //passwort md5 verschlüsseln

							$sql = "INSERT INTO `benutzer` (`Vorname`, `Nachname`, `Telefonnummer`, `Email`, `Benutzername`, `Passwort`) VALUES ('$vn', '$nn', '$tel', '$email', '$bn', '$pwmd5')"; //Benutzer in Datenbank eintragen

							$db->query($sql); //sql befehl ausführen
							
							$sql2 = "SELECT ID FROM benutzer WHERE Benutzername='$bn' && Passwort='$pwmd5'";

							$result = $db->query($sql2); //Datenbankabfrage um ID herauszufinden ausführen
							
							$dsatz = mysqli_fetch_assoc($result); //array aus abfrage bilden
							
							$bnid=md5($dsatz['ID']); //User ID in md5 verschlüsseln
							
							$ang = md5('NeinNeinNein'); //Parameter für Angemeldet
							
							header('Location: index.php?id='.$ang.'&lg='.$bnid.'');
							
						}
					}
					else
					{
						echo 'Passwörter stimmen nicht überein, bitte überprüfen Sie Ihre Eingabe.';
					}				
				?>
				
			</div>
	</body>
</html>
</html>