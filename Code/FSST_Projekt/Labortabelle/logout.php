<HTML>
<head>
	<title>Logout</title>
	<link rel="icon" href="assets/img/tabicon.png">
</head>
<body>
	<?php
		session_start();
		session_destroy();	//Session wird gelöscht => keine Rechte mehr auf Zugriff
		echo 'Logout erfolgreich. Weiter zum <a href="beginn.php">Login</a>'
	?>
</body>
</HTML>