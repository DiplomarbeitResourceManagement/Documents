<?php
 
// Konfiguration
$csvFile = "L:\GitHub\Documents\Code\LabDB\Bestand2007_format_bmkz.csv";
$firstRowHeader = true;
 
// Daten auslesen und Tabelle generieren
$handle = fopen($csvFile, "r");

//db connection
mysql_connect("localhost","root","");
mysql_select_db("labdbv05");


$file = fopen("L:\GitHub\Documents\Code\LabDB\LabDB_all_records_bmkz.sql", "w") or die("Unable to open file!");

$counter=0;

while($data = fgetcsv($handle, 512, ";")) {
	
	if(($counter == 0) && $firstRowHeader) {}
	else {
		
		$sql  = "INSERT INTO labor (";
		$sql .= "id, ";
		$sql .= "anlagennr, ";
		$sql .= "ausgeborgt, ";
		$sql .= "bmkz_bmkzid, ";
		$sql .= "bemerkung_bemid, ";
		$sql .= "bildreferenz_bid, ";
		$sql .= "fach_fachid, ";
		$sql .= "firma_fid, ";
		$sql .= "ger_ser_nr_gsnid, ";
		$sql .= "invnr_invid, ";
		$sql .= "kasten_kastid, ";
		$sql .= "kategorie_kid, ";
		$sql .= "raum_rid, ";
		$sql .= "reparatur, ";
		$sql .= "typ_typid) VALUES (";
		
		$sql .= "". $data[0] ."";
		
		if($data[5] != NULL)
		{
			$sql .= ",". $data[5] ."";
		}
		else
		{
			$sql .= ",0";
		}
		
		$sql .= ",0";
		
		$sql1 = " SELECT * FROM bmkz WHERE bmkz ='".$data[1]."'; ";
		$result = mysql_query($sql1);	// Select Befehl ausführen
		$row=mysql_fetch_array($result);
		$sql .= ",". $row["bmkzid"] ."";
	
		$sql1 = " SELECT * FROM bemerkung WHERE bem ='".$data[2]."'; ";
		$result = mysql_query($sql1);	// Select Befehl ausführen
		$row=mysql_fetch_array($result);
		$sql .= ",". $row["bemid"] ."";

		$sql1 = " SELECT * FROM bildreferenz WHERE bildref ='".$data[13]."'; ";
		$result = mysql_query($sql1);	// Select Befehl ausführen
		$row=mysql_fetch_array($result);
		$sql .= ",". $row["bid"] ."";

		$sql1 = " SELECT * FROM fach WHERE fachname ='".$data[10]."'; ";
		$result = mysql_query($sql1);	// Select Befehl ausführen
		$row=mysql_fetch_array($result);
		$sql .= ",". $row["fachid"] ."";
		
		$sql1 = " SELECT * FROM firma WHERE fname ='".$data[3]."'; ";
		$result = mysql_query($sql1);	// Select Befehl ausführen
		$row=mysql_fetch_array($result);
		$sql .= ",". $row["fid"] ."";
		
		$sql1 = " SELECT * FROM ger_ser_nr WHERE g_s_nr ='".$data[7]."'; ";
		$result = mysql_query($sql1);	// Select Befehl ausführen
		$row=mysql_fetch_array($result);
		$sql .= ",". $row["gsnid"] ."";
		
		$sql1 = " SELECT * FROM invnr WHERE invnr ='".$data[6]."'; ";
		$result = mysql_query($sql1);	// Select Befehl ausführen
		$row=mysql_fetch_array($result);
		$sql .= ",". $row["invid"] ."";
		
		$sql1 = " SELECT * FROM kasten WHERE kastname ='".$data[9]."'; ";
		$result = mysql_query($sql1);	// Select Befehl ausführen
		$row=mysql_fetch_array($result);
		$sql .= ",". $row["kastid"] ."";
		
		$sql1 = " SELECT * FROM kategorie WHERE kname ='".$data[11]."'; ";
		$result = mysql_query($sql1);	// Select Befehl ausführen
		$row=mysql_fetch_array($result);
		$sql .= ",". $row["kid"] ."";
		
		$sql1 = " SELECT * FROM raum WHERE rname ='".$data[12]."'; ";
		$result = mysql_query($sql1);	// Select Befehl ausführen
		$row=mysql_fetch_array($result);
		$sql .= ",". $row["rid"] ."";
		
		$sql .= ",0";
		
		$sql1 = " SELECT * FROM typ WHERE typ ='".$data[4]."'; ";
		$result = mysql_query($sql1);	// Select Befehl ausführen
		$row=mysql_fetch_array($result);
		$sql .= ",". $row["typid"] .");\n";	//Insert Into Befehl in sql abgespeichert
		
		//mysql_query($sql);	// Insert Into Befehl ausführen
		fwrite($file, $sql);
	}
	$counter++;
}
 
fclose($handle);
 
?>