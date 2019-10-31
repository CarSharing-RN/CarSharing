<DOCTYPE !html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Carsharing</title>
		<link rel="stylesheet" type="text/css" href="../style/style.css">
	</head>
	<body class="hintergrund">
			<!--Navigation---------------------------------------------------------------------------->
				<?php
					error_reporting(!E_ALL);
					
					$param = $_GET['id'];
					$bnid = $_GET['lg'];
					
					if($param == md5('NeinNeinNein'))
					{
						echo "
						<ul>
							<li><a class='active' href='index.php?id=".$param."&lg=".$bnid."'>Startseite</a></li>
							<li><a href='funktion.php?id=".$param."&lg=".$bnid."'>So funktionierts</a></li>
							<li><a href='Fahrzeugmodelle.php?id=".$param."&lg=".$bnid."'>Fahrzuegmodelle</a></li>
							<li><a href='Reservieren.php?id=".$param."&lg=".$bnid."'>Reservieren</a></li>
							<li><a href='Reservationen.php?id=".$param."&lg=".$bnid."'>Reservierte Fahrzeuge</a></li>
						</ul>";
					}
					else
					{
						echo "
						<ul>
							<li><a class='active' href='index.php?id=0'>Startseite</a></li>
							<li><a href='funktion.php?id=0'>So funktionierts</a></li>
							<li><a href='Fahrzeugmodelle.php?id=0'>Fahrzuegmodelle</a></li>
							<li><a href='Reservieren.php?id=0'>Reservieren</a></li>
							<li><a href='Anmelden.php?id=0'>Anmelden</a></li>
						</ul>";
					}
				?>
			<!--Ende Navigation----------------------------------------------------------------------->
			<!--Seiteninhalt-------------------------------------------------------------------------->
				<div class="TextIndex">
					<h1>Carsharing<h1>
					<h2>Die Mobilität hat einen neuen Namen</h2>
				</div>
			<!--Seiteninhalt Ende--------------------------------------------------------------------->
	</body>
</html>