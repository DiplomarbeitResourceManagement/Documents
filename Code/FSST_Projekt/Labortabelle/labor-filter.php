<!DOCTYPE html>
<form name="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" >
	<!-- Standort auswählen -->
	<p>
		Standort:
		<br />
		<?php 
			//db connection
			mysql_connect("localhost","root","");
			mysql_select_db("labordatenbank");

			//query
			$sql=mysql_query("SELECT * FROM standort order by sname asc;");
			if(mysql_num_rows($sql))
			{
				$select= '<input list="standorte" name="standort"><datalist id="standorte">';	// Dropdown-Menü mit allen Standorten aus der Standort-Tabelle
				while($rs=mysql_fetch_array($sql))	// wird so oft ausgeführt, wie Standorte in der Tabelle sind
				{
					// Name des Standortes anzeigen und übergeben
					$select.='<option value="'.$rs['sname'].'"</option>';
				}
			}
			$select.='</datalist>';
			echo $select;	// Dropdown-Menü anzeigen
		?>
	</p>
 
	<p>
		Firma:
		<br />
		<?php 
			//db connection
			mysql_connect("localhost","root","");
			mysql_select_db("labordatenbank");

			//query
			$sql=mysql_query("SELECT * FROM firma order by fname asc;");
			if(mysql_num_rows($sql))
			{
				$select= '<input list="firmen" name="firma"><datalist id="firmen">';	// Dropdown-Menü mit allen Firmen aus der Firmen-Tabelle
				while($rs=mysql_fetch_array($sql))	// wird so oft ausgeführt, wie Firmen in der Tabelle sind
				{
					// Name der Firma anzeigen und übergeben
					$select.='<option value="'.$rs['fname'].'"</option>';
				}
			}
			$select.='</datalist>';
			echo $select;	// Dropdown-Menü anzeigen
		?>
	</p>
 
	<p>
		Kategorie:
		<br />
		<?php 
			//db connection
			mysql_connect("localhost","root","");
			mysql_select_db("labordatenbank");

			//query
			$sql=mysql_query("SELECT * FROM kategorie order by kname asc;");
			if(mysql_num_rows($sql))
			{
				$select= '<input list="kategorien" name="kategorie"><datalist id="kategorien">';	// Dropdown-Menü mit allen Kategorien aus der Kategorie-Tabelle
				while($rs=mysql_fetch_array($sql))	// wird so oft ausgeführt, wie Kategorien in der Tabelle sind
				{
					// Name der Kategorie anzeigen und übergeben
					$select.='<option value="'.$rs['kname'].'"</option>';
				}
			}
			$select.='</datalist>';
			echo $select;	// Dropdown-Menü anzeigen
		?>
	</p>
 
	<input type="Submit" value="Filtern" />	<!-- nach ned ausgewählten Eigenschaften filtern -->
</form>

<?php
	$sql = "select id, sname, fname, kname from labor,standort,firma,kategorie where standort_sid=sid and firma_fid=fid and kategorie_kid=kid";
	if ( $_POST['standort'] != "" )
	{
		$sql .= " and sname='". $_POST['standort'] ."'";
	}
	if ( $_POST['firma'] != "" )
	{
		$sql .= " and fname='". $_POST['firma'] ."'";
	}
	if ( $_POST['kategorie'] != "" )
	{
		$sql .= " and kname='". $_POST['kategorie'] ."'";
	}
	$sql .= " order by id asc;";	//Select Befehl in sql abgespeichert
	
	
	mysql_connect("localhost","root","") or die(mysql_error());	//Datenbankverbindungsaufbau
	mysql_select_db("labordatenbank") or die("labor");	//Datenbank auswählen
	
	$result = mysql_query($sql);	// Select Befehl ausführen
	
	// Namen der Spalten als 1. Zeile der Tabelle anzeigen
	echo '<table border="1">';
	echo "<tr>";
	echo "<td><h4>ID</h4></td>";
	echo "<td><h4>Standort</h4></td>";
	echo "<td><h4>Firma</h4></td>";
	echo "<td><h4>Kategorie</h4></td>";
	echo "</tr>";
	
	while ($row=mysql_fetch_array($result))	// wird so oft ausgeführt, wie Einträge in der Datenbank sind
	{
		// aktuellen Eintrag als Zeile der Tabelle anzeigen
		echo "<tr>";
		echo "<td>". $row["id"] . "</td>";
		echo "<td>". $row["sname"] . "</td>";
		echo "<td>". $row["fname"] . "</td>";
		echo "<td>". $row["kname"] . "</td>";
		echo "</tr>";
	}
	
	echo "</table>";	// Tabelle anzeigen
?>