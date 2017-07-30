<?php
 
// Konfiguration
$csvFile = "L:\GitHub\Documents\Code\Absolventen\Absolventen_all_format_sozial.csv";
$firstRowHeader = true;
 
// Daten auslesen und Tabelle generieren
$handle = fopen($csvFile, "r");

//db connection
mysql_connect("localhost","root","");
mysql_select_db("absolventenv05");


$file = fopen("L:\GitHub\Documents\Code\Absolventen\Absolventen_all_records_v03.sql", "w") or die("Unable to open file!");

$counter=0;

while($data = fgetcsv($handle, 512, ";")) {
	
	if(($counter == 0) && $firstRowHeader) {}
	else {
		
		$sql  = "INSERT INTO absolventen (";
		$sql .= "verstorben, ";
		$sql .= "xing_profil_id_xing_p, ";
		$sql .= "fb_profil_id_fb_p, ";
		$sql .= "linkedin_profil_id_linkedin_p, ";
		$sql .= "tel_privat_id_tel_priv, ";
		$sql .= "email_privat_id_mail_priv, ";
		$sql .= "firma_ex_name_id_f_ex_n, ";
		$sql .= "exkursion, ";
		$sql .= "da, ";
		$sql .= "f_praxis, ";
		$sql .= "firma_strasse_id_strasse, ";
		$sql .= "firma_ort_id_ort, ";
		$sql .= "firma_plz_id_plz, ";
		$sql .= "firmentelefon_id_f_tel, ";
		$sql .= "taetigkeit_id_taet, ";
		$sql .= "firma_email_id_f_email, ";
		$sql .= "aktualisierungsjahr_id_akt, ";
		$sql .= "xing, ";
		$sql .= "titel_id_t, ";
		$sql .= "katalognummer_id_kat, ";
		$sql .= "firma_id_f, ";
		$sql .= "klasse_id_k, ";
		$sql .= "Nachname_id_nn, ";
		$sql .= "Vorname_id_vn, ";
		$sql .= "Abschlussjahr_id_j) VALUES (";
		
		$sql .= "". $data[25] ."";
		
		$sql1 = " SELECT * FROM xing_profil WHERE xing_p ='".$data[22]."'; ";
		$result = mysql_query($sql1);	// Select Befehl ausführen
		$row=mysql_fetch_array($result);
		$sql .= ",". $row["id_xing_p"] ."";
		
		$sql1 = " SELECT * FROM fb_profil WHERE fb_p ='".$data[23]."'; ";
		$result = mysql_query($sql1);	// Select Befehl ausführen
		$row=mysql_fetch_array($result);
		$sql .= ",". $row["id_fb_p"] ."";
		
		$sql1 = " SELECT * FROM linkedin_profil WHERE linkedin_p ='".$data[24]."'; ";
		$result = mysql_query($sql1);	// Select Befehl ausführen
		$row=mysql_fetch_array($result);
		$sql .= ",". $row["id_linkedin_p"] ."";
	
		$sql1 = " SELECT * FROM tel_privat WHERE tel_privat ='".$data[21]."'; ";
		$result = mysql_query($sql1);	// Select Befehl ausführen
		$row=mysql_fetch_array($result);
		$sql .= ",". $row["id_tel_priv"] ."";

		$sql1 = " SELECT * FROM email_privat WHERE email_privat ='".$data[20]."'; ";
		$result = mysql_query($sql1);	// Select Befehl ausführen
		$row=mysql_fetch_array($result);
		$sql .= ",". $row["id_mail_priv"] ."";

		$sql1 = " SELECT * FROM firma_ex_name WHERE f_ex_n ='".$data[19]."'; ";
		$result = mysql_query($sql1);	// Select Befehl ausführen
		$row=mysql_fetch_array($result);
		$sql .= ",". $row["id_f_ex_n"] ."";

		$sql .= ",". $data[18] ."";

		$sql .= ",". $data[17] ."";

		$sql .= ",". $data[16] ."";

		$sql1 = " SELECT * FROM firma_strasse WHERE strasse ='".$data[15]."'; ";
		$result = mysql_query($sql1);	// Select Befehl ausführen
		$row=mysql_fetch_array($result);
		$sql .= ",". $row["id_strasse"] ."";
		
		$sql1 = " SELECT * FROM firma_ort WHERE ort ='".$data[14]."'; ";
		$result = mysql_query($sql1);	// Select Befehl ausführen
		$row=mysql_fetch_array($result);
		$sql .= ",". $row["id_ort"] ."";

		$sql1 = " SELECT * FROM firma_plz WHERE plz ='".$data[13]."'; ";
		$result = mysql_query($sql1);	// Select Befehl ausführen
		$row=mysql_fetch_array($result);
		$sql .= ",". $row["id_PLZ"] ."";

		$sql1 = " SELECT * FROM firmentelefon WHERE f_tel ='".$data[12]."'; ";
		$result = mysql_query($sql1);	// Select Befehl ausführen
		$row=mysql_fetch_array($result);
		$sql .= ",". $row["id_f_tel"] ."";

		$sql1 = " SELECT * FROM taetigkeit WHERE taetigkeit ='".$data[11]."'; ";
		$result = mysql_query($sql1);	// Select Befehl ausführen
		$row=mysql_fetch_array($result);
		$sql .= ",". $row["id_taet"] ."";
		echo($sql);

		$sql1 = " SELECT * FROM firma_email WHERE firma_mail ='".$data[10]."'; ";
		$result = mysql_query($sql1);	// Select Befehl ausführen
		$row=mysql_fetch_array($result);
		$sql .= ",". $row["id_f_email"] ."";

		$sql1 = " SELECT * FROM aktualisierungsjahr WHERE jahr_akt ='".$data[8]."'; ";
		$result = mysql_query($sql1);	// Select Befehl ausführen
		$row=mysql_fetch_array($result);
		$sql .= ",". $row["id_akt"] ."";

		$sql .= ",". $data[7] ."";

		$sql1 = " SELECT * FROM titel WHERE titel ='".$data[6]."'; ";
		$result = mysql_query($sql1);	// Select Befehl ausführen
		$row=mysql_fetch_array($result);
		$sql .= ",". $row["id_t"] ."";

		$sql1 = " SELECT * FROM katalognummer WHERE katnr ='".$data[3]."'; ";
		$result = mysql_query($sql1);	// Select Befehl ausführen
		$row=mysql_fetch_array($result);
		$sql .= ",". $row["id_kat"] ."";

		$sql1 = " SELECT * FROM firma WHERE firma ='".$data[9]."'; ";
		$result = mysql_query($sql1);	// Select Befehl ausführen
		$row=mysql_fetch_array($result);
		$sql .= ",". $row["id_f"] ."";

		$sql1 = " SELECT * FROM klasse WHERE klasse ='".$data[2]."'; ";
		$result = mysql_query($sql1);	// Select Befehl ausführen
		$row=mysql_fetch_array($result);
		$sql .= ",". $row["id_k"] ."";

		$sql1 = " SELECT * FROM nachname WHERE nn ='".$data[4]."'; ";
		$result = mysql_query($sql1);	// Select Befehl ausführen
		$row=mysql_fetch_array($result);
		$sql .= ",". $row["id_nn"] ."";
		
		$sql1 = " SELECT * FROM vorname WHERE vn ='".$data[5]."'; ";
		$result = mysql_query($sql1);	// Select Befehl ausführen
		$row=mysql_fetch_array($result);
		$sql .= ",". $row["id_vn"] ."";

		$sql1 = " SELECT * FROM abschlussjahr WHERE Jahr ='".$data[1]."'; ";
		$result = mysql_query($sql1);	// Select Befehl ausführen
		$row=mysql_fetch_array($result);
		$sql .= ",". $row["id_j"] .");\n";	//Insert Into Befehl in sql abgespeichert
		
		//mysql_query($sql);	// Insert Into Befehl ausführen
		fwrite($file, $sql);
	}
	$counter++;
}
 
fclose($handle);
 
?>