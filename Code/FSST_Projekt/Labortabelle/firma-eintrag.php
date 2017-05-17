<!DOCTYPE html>
<meta charset="utf-8_german2_ci" />
<form name="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" >
	<p>Firmenname:<br />							<!-- Textfeld zur Eingabe eines neuen Firmennamens -->
		<input type="text" name="fname" value="" />
	</p>
	<input type="Submit" value="speichern" />		<!-- Speichern Button -->
</form>

<?php
	if ( $_POST['fname'] != "" )				//Abfrage ob etwas in das Textfeld eingetragen wurde oder ob ein leeres Textfeld gesendet wurde
	{
		echo "<h2>Eintrag gespeichert</h2>";
		$sql = " INSERT INTO firma ";
		$sql .= " SET ";
		$sql .= " fname='". $_POST['fname'] ."' ";	//Insert Into Befehl in sql abgespeichert
		
		echo "<hr />SQL: $sql<hr />";				//Befehl wird auf Webseite angezeigt
		
		define ( 'MYSQL_HOST', 'localhost' );		//Definitionen für Datenbankverbindug
		define ( 'MYSQL_BENUTZER', 'root' );
		define ( 'MYSQL_KENNWORT', '' );
		define ( 'MYSQL_DATENBANK', 'labordatenbank' );
		 
		$db_link = @mysqli_connect (MYSQL_HOST,		//Datenbankverbindungsaufbau
								   MYSQL_BENUTZER,
								   MYSQL_KENNWORT,
								   MYSQL_DATENBANK);
		 
		if ( ! $db_link )	//Abfrage ob Verbindungsaufbau erfolgreich
		{
			die('keine Verbindung zur Zeit möglich - später probieren ');
		}
		
		// ausführen des mysql-Befehls
		$db_erg = mysqli_query( $db_link, $sql);
		if ( ! $db_erg )	//Abfrage ob der Sql Befehl ausgeführt werden konnte
		{
			die('Ungültige Abfrage: ' . mysql_error());
		}
		exit;
	}
?>