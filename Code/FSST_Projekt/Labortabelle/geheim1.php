<?php
session_start();	//Session wird gestartet
if(!isset($_SESSION['userid'])) //Überprüfung ob man eigeloggt ist
{
	die('Bitte zuerst <a href="login1.php">einloggen</a>');
}
 
//Abfrage der Nutzer ID vom Login
$userid = $_SESSION['userid'];
 

if($_SESSION['userid']!=1)	//Überprüfung ob man Administratorrechte besitzt
{
	die ('Sie sind für diesen Bereich nicht registriert <a href="index.php">zurück</a>');
}
?>