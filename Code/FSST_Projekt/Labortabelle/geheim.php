<?php
session_start();	//Session starten
if(!isset($_SESSION['userid'])) //Abfrage ob man eingeloggt ist
{
	die('Bitte zuerst <a href="login.php">einloggen</a>');
}
 
//Abfrage der Nutzer ID vom Login
$userid = $_SESSION['userid'];
 
echo "Hallo User: ".$userid;
?>