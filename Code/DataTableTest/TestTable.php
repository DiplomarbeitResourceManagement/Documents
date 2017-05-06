<script src="jQuery.js"></script>
<script src="dataTables_min.js"></script>
<link rel="stylesheet" type="text/css" href="dataTables_min.css">
<script src="TestTable.js"></script>

<?php
	$sql = "select id, sname, fname, kname from labor,standort,firma,kategorie where standort_sid=sid and firma_fid=fid and kategorie_kid=kid";
	
	
	mysql_connect("localhost","root","") or die(mysql_error());	//Datenbankverbindungsaufbau
	mysql_select_db("labordatenbank") or die("labor");	//Datenbank auswählen
	
	$result = mysql_query($sql);	// Select Befehl ausführen
	
	// Namen der Spalten als 1. Zeile der Tabelle anzeigen
	echo '<table id="example" class="display" cellspacing="0" width="100%">';
	echo "<thead><tr>";
	echo "<th>ID</th>";
	echo "<th>Standort</th>";
	echo "<th>Firma</th>";
	echo "<th>Kategorie</th>";
	echo "</tr></thead>";
	
	echo "<tfoot><tr>";
	echo "<th>ID</th>";
	echo "<th>Standort</th>";
	echo "<th>Firma</th>";
	echo "<th>Kategorie</th>";
	echo "</tr></tfoot>";
	
	echo "<tbody>";
	
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
	
	echo "</tbody></table>";	// Tabelle anzeigen
?>