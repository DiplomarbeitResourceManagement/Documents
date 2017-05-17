<!DOCTYPE html>
<form name="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" >
	<!-- ID eingeben -->
	<p>
		ID:
		<br />
		<input type="number" name="php_id" value="" />
	</p>
 
	<input type="Submit" name="submit" value="Löschen" />	<!-- Eintrag mit ausgewählter ID löschen -->
</form>

<?php
	if(isset($_POST['submit']) && ( $_POST['php_id'] != "" ))	// wenn Löschen-Button gedrückt und eine ID eingegeben wurde
	{
		$id = $_POST['php_id'];	// eingegebene ID in Variable speichern
		// Select Befehl für den zu löschenden Eintrag
		$sql = "select id, sname, fname, kname from labor,standort,firma,kategorie where standort_sid=sid and firma_fid=fid and kategorie_kid=kid";
		if ( $_POST['php_id'] != "" )	// wenn eine ID eingegeben wurde
		{
			$sql .= " and id='". $_POST['php_id'] ."'";
		}
		
		mysql_connect("localhost","root","") or die(mysql_error());	//Datenbankverbindungsaufbau
		mysql_select_db("labordatenbank") or die("labor");	//Datenbank auswählen

		$result = mysql_query($sql);

		// Namen der Spalten als 1. Zeile der Tabelle anzeigen
		echo '<table border="1">';
		echo "<tr>";
		echo "<td><h4>ID</h4></td>";
		echo "<td><h4>Standort</h4></td>";
		echo "<td><h4>Firma</h4></td>";
		echo "<td><h4>Kategorie</h4></td>";
		echo "</tr>";
		
		while ($row=mysql_fetch_array($result))	// wird so oft ausgeführt, wie Einträge mit derselben ID in der Datenbank sind (einmal)
		{
			// zu löschenden Eintrag als Zeile der Tabelle anzeigen
			echo "<tr>";
			echo "<td>". $row["id"] . "</td>";
			echo "<td>". $row["sname"] . "</td>";
			echo "<td>". $row["fname"] . "</td>";
			echo "<td>". $row["kname"] . "</td>";
			echo "</tr>";
		}
		
		echo "</table>";	// Tabelle anzeigen
	
		$sql = "delete from labor where id=$id";	// Delete Befehl für zu löschenden Eintrag		
		
		mysql_connect("localhost","root","") or die(mysql_error());	//Datenbankverbindungsaufbau
		mysql_select_db("labordatenbank") or die("labor");	//Datenbank auswählen

		$result = mysql_query($sql);	// Delet Befehl ausführen
		
		echo " Dieser Eintrag wurde gelöscht!";
	}

?>