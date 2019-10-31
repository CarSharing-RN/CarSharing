<?php
$db = mysqli_connect("localhost", "root", "", "carsharing"); //datenbankverbindung aufbauen

if(!$db){ //Datenbankverbindung prüfen
		 exit("Verbindungsfehler: ".mysqli_connect_error()); 
		}
?>