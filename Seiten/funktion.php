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
					
					$param = $_GET['id'];
					$bnid = $_GET['lg'];
					
					if($param == md5('NeinNeinNein'))
					{
						echo "
						<ul>
							<li><a href='index.php?id=".$param."&lg=".$bnid."'>Startseite</a></li>
							<li><a class='active' href='funktion.php?id=".$param."&lg=".$bnid."'>So funktionierts</a></li>
							<li><a href='Fahrzeugmodelle.php?id=".$param."&lg=".$bnid."'>Fahrzuegmodelle</a></li>
							<li><a href='Reservieren.php?id=".$param."&lg=".$bnid."'>Reservieren</a></li>
							<li><a href='Reservationen.php?id=".$param."&lg=".$bnid."'>Reservierte Fahrzeuge</a></li>
						</ul>";
					}
					else
					{
						echo "
						<ul>
							<li><a href='index.php?id=0'>Startseite</a></li>
							<li><a class='active' href='funktion.php?id=0'>So funktionierts</a></li>
							<li><a href='Fahrzeugmodelle.php?id=0'>Fahrzuegmodelle</a></li>
							<li><a href='Reservieren.php?id=0'>Reservieren</a></li>
							<li><a href='Anmelden.php?id=0'>Anmelden</a></li>
						</ul>";
					}
				?>
			<!--Ende Navigation----------------------------------------------------------------------->
				<br>
				<br>
			<!--Seiteninhalt-------------------------------------------------------------------------->
				<div class="titel">
					<h1>Carsharing: So funktionierts</h1>
				</div>
				<div class="tfunk2">
					<h2>Anmeldung</h2>
				</div>
				<div class="textfunk">
					<p> Um sich ein fahrzueg Reservieren zu können muss man sich zuerts anmelden. Dazu können Sie einfach das Anmeldeformular auf unserer Webseite verwenden.
						Nachdem Sie sich angemeldet haben wird einer unserer Mitarbeiter sie Anrufen um sicher zu stellen das Sie einen gültigen Führerschien haben.
						Wenn dieser Schritt abgeschlossen ist, können Sie schon beginnen und Ihr gewünschtes Auto reservieren.
					</p>
				</div>
				<div class="tfunk2">
					<h2>Reservierung</h2>
				</div>
				<div class="textfunk">
					<p> Sie haben die möglichkeit das Fahrzueg direkt auf unserer Webseite zu reservieren. Dies können Sie über die Registerkarte Reservieren machen.
						Um Ihr lieblingsauto zu finden können Sie nach den gewünschten Eigenschaften filter welche das Fahrzueg braucht. Zugleich können Sie Ihren Standort angeben
						und somit werden alle Farhrzeuge mit den entsprechenden Eigenschaften, die es in Ihrer Nähe hat, auf der Karte angezeigt. Danach können sie das Fahrzueg auswählen welches sie reservieren wollen,
						den Zeitraum eingeben von wann bis wann Sie es reservieren möchten und schon haben sie das Fahrzeug für sich reserviert.
					</p>
				</div>
				<div class="tfunk2">
					<h2>Losfahren</h2>
				</div>
				<div class="textfunk">
					<p>Gehen Sie zu Ihrem reservierten Auto und sie können es ganz leicht mit Ihrem Carsharing Pass oder per App entsperren und danach können Sie schon losfahren.
					</p>
				</div>
				<div class="tfunk2">
					<h2>Zurückbringen</h2>
				</div>
				<div class="textfunk">
					<p>Stellen Sie Ihr Auto ganz einfach an den Ausgangsstandort zurück. 
					</p>
				</div>
			<!--Seiteninhalt Ende--------------------------------------------------------------------->
	</body>

</html>