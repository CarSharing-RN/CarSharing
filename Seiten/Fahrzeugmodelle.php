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
							<li><a href='funktion.php?id=".$param."&lg=".$bnid."'>So funktionierts</a></li>
							<li><a class='active' href='Fahrzeugmodelle.php?id=".$param."&lg=".$bnid."'>Fahrzuegmodelle</a></li>
							<li><a href='Reservieren.php?id=".$param."&lg=".$bnid."'>Reservieren</a></li>
							<li><a href='Reservationen.php?id=".$param."&lg=".$bnid."'>Reservierte Fahrzeuge</a></li>
						</ul>";
					}
					else
					{
						echo "
						<ul>
							<li><a href='index.php?id=0'>Startseite</a></li>
							<li><a href='funktion.php?id=0'>So funktionierts</a></li>
							<li><a class='active' href='Fahrzeugmodelle.php?id=0'>Fahrzuegmodelle</a></li>
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
					<h1>Carsharing: Unsere Fahrzeugmodelle</h1>
				</div>
				<div class="boxmodelle">
					<h2>Audis</h2>
						<div class="audi">
							<table>
								<tr>
									<td valign="top">
										<img src="../bilder/Audi_A6_S-linejpg.jpg" alt="Audi A6" name="Audi A6" />
									</td>
									<td valign="top">
										<p><b>Audi A6</b><br>6 Gangschaltung<br>5 Sitzplätze<br>Allradantrieb<br>300 PS</p>
									</td>
									<td valign="top">
										<p><img src="../bilder/Audi-A3-Typ-8V-3.jpg" alt="Audi A3" name="Audi A3"  /></p>
									</td>
									<td valign="top">
										<p><b>Audi A3</b><br>6 Gangschaltung<br>5 Sitzplätze<br>Frontantrieb<br>250 PS</p>
									</td>
								</tr>
								<br>
								<tr>
									<td valign="top">
										<br><p><img src="../bilder/s1-ea6.png" alt="Audi S1" name="Audi S1"  /></p>
									</td>
									<td valign="top">
										<br><p><b>Audi S1</b><br>6 Gangschaltung<br>5 Sitzplätze<br>heckantrieb<br>270 PS</p>
									</td>
								</tr>
							</table>
						</div>
					<h2>VW's</h2>
						<div class="vw">
							<table>
								<tr>
									<td valign="top">
										<img src="../bilder/VW_Phaeton_20090712_front.jpg" alt="VW Phaeton" name="VW Phaeton" />
									</td>
									<td valign="top">
										<p><b>VW Phaeton</b><br>6 Gangschaltung<br>5 Sitzplätze<br>Allradantrieb<br>300 PS</p>
									</td>
									<td valign="top">
										<p><img src="../bilder/2018_Volkswagen_Arteon_2.0.jpg" alt="VW Arteon" name="VW Arteon"  /></p>
									</td>
									<td valign="top">
										<p><b>VW Arteon</b><br>6 Gangschaltung<br>5 Sitzplätze<br>Frontantrieb<br>250 PS</p>
									</td>
								</tr>
								<br>
								<tr>
									<td valign="top">
										<br><p><img src="../bilder/2017VWGolf.jpg" alt="VW Golf 2017" name="VW Golf 2017"  /></p>
									</td>
									<td valign="top">
										<br><p><b>VW Golf 2017</b><br>6 Gangschaltung<br>5 Sitzplätze<br>heckantrieb<br>270 PS</p>
									</td>
								</tr>
							</table>
							<br><br><br><br>
						</div>
				</div>
			<!--Ende Seiteninhalt--------------------------------------------------------------------->
	</body>

</html>