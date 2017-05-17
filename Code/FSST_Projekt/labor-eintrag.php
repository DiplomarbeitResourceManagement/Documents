<!DOCTYPE html>
<form name="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" >
	<!-- Standort auswählen -->
	<p>
		<label>Standort</label>
		<?php 
			//db connection
			mysql_connect("localhost","root","");
			mysql_select_db("labordatenbank");

			//query
			$sql=mysql_query("SELECT * FROM standort order by sname asc;");
			if(mysql_num_rows($sql))
			{
				$select= '<select name="standort_sid">';	// Dropdown-Menü mit allen Standorten aus der Standort-Tabelle
				while($rs=mysql_fetch_array($sql))	// wird so oft ausgeführt, wie Standorte in der Tabelle sind
				{
					// Name des Standortes anzeigen und ID übergeben
					$select.='<option value="'.$rs['sid'].'">'.$rs['sname'].'</option>';
				}
			}
			$select.='</select>';
			echo $select;	// Dropdown-Menü anzeigen
		?>
	</p>
	<!-- Firma auswählen -->
	<p>
		<label>Firma</label>
		<?php 
			//db connection
			mysql_connect("localhost","root","");
			mysql_select_db("labordatenbank");

			//query
			$sql=mysql_query("SELECT * FROM firma order by fname asc;");
			if(mysql_num_rows($sql))
			{
				$select= '<select name="firma_fid">';	// Dropdown-Menü mit allen Firmen aus der Firmen-Tabelle
				while($rs=mysql_fetch_array($sql))	// wird so oft ausgeführt, wie Firmen in der Tabelle sind
				{
					// Name der Firma anzeigen und ID übergeben
					$select.='<option value="'.$rs['fid'].'">'.$rs['fname'].'</option>';
				}
			}
			$select.='</select>';
			echo $select;	// Dropdown-Menü anzeigen
		?>
	</p>
	<!-- Kategorie auswählen -->
	<p> 
		<label>Kategorie</label>
		<?php 
			//db connection
			mysql_connect("localhost","root","");
			mysql_select_db("labordatenbank");

			//query
			$sql=mysql_query("SELECT * FROM kategorie order by kname asc;");
			if(mysql_num_rows($sql))
			{
				$select= '<select name="kategorie_kid">';	// Dropdown-Menü mit allen Kategorien aus der Kategorie-Tabelle
				while($rs=mysql_fetch_array($sql))	// wird so oft ausgeführt, wie Kategorien in der Tabelle sind
				{
					// Name der Kategorie anzeigen und ID übergeben
					$select.='<option value="'.$rs['kid'].'">'.$rs['kname'].'</option>';
				}
			}
			$select.='</select>';
			echo $select;	// Dropdown-Menü anzeigen 
		?>
	</p>

	<input type="Submit" name="absenden" value="speichern" />	<!-- Eintrag mit ausgewählten Eigenschaften speichern -->
</form>

<?php
	if (isset($_POST['absenden']))	// wenn der speichern-Button gedrückt wurde
	{
		echo "<h2>Eintrag gespeichert</h2>";
		$sql = " INSERT INTO labor ";
		$sql .= " SET ";
		$sql .= " Standort_SID   ='". $_POST['standort_sid'] ."', ";
		$sql .= " Firma_FID  ='". $_POST['firma_fid'] ."', ";
		$sql .= " Kategorie_KID='". $_POST['kategorie_kid'] ."' ";	//Insert Into Befehl in sql abgespeichert
		
		echo "<hr />SQL: $sql<hr />";								//Befehl wird auf Webseite angezeigt
		
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
		$db_erg = mysqli_query( $db_link, $sql );
		if ( ! $db_erg )	//Abfrage ob der Sql Befehl ausgeführt werden konnte
		{
			die('Ungültige Abfrage: ' . mysql_error());
		}
		exit;
	}
?>