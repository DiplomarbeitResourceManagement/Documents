<?php 
	session_start();
	$pdo = new PDO('mysql:host=localhost;dbname=user', 'root', '');
?>
<!DOCTYPE html> 
<html> 
<head>
	<title>Registrierung</title> 
</head> 
<body>
 
<?php
$showFormular = true; //Variable ob das Registrierungsformular anezeigt werden soll
 
if(isset($_GET['register'])) {
	$error = false;
	$email = $_POST['email'];
	$passwort = $_POST['passwort'];
	$passwort2 = $_POST['passwort2'];
  
	if(!filter_var($email, FILTER_VALIDATE_EMAIL))	//Überprüfung ob E-Mail gültig ist (z.B. ein @ enthält)
	{
		echo 'Bitte eine gültige E-Mail-Adresse eingeben<br>';
		$error = true;
	} 
	if(strlen($passwort) == 0)	//Überprüfung ob Passwort eingegeben wurde
	{
		echo 'Bitte ein Passwort angeben<br>';
		$error = true;
	}
	if($passwort != $passwort2)	//Überprüfung ob das erneut eingegebene Passwort mit dem 1. übereinstimmt
	{
		echo 'Die Passwörter müssen übereinstimmen<br>';
		$error = true;
	}
	
	//Überprüfe, dass die E-Mail-Adresse noch nicht registriert wurde
	if(!$error) 
	{ 
		$statement = $pdo->prepare("SELECT * FROM users WHERE email = :email");
		$result = $statement->execute(array('email' => $email));
		$user = $statement->fetch();
		 
		if($user !== false) 
		{
			echo 'Diese E-Mail-Adresse ist bereits vergeben<br>';
			$error = true;
		} 
	}
	 
	//Keine Fehler, wir können den Nutzer registrieren
	if(!$error) 
	{ 
		$passwort_hash = password_hash($passwort, PASSWORD_DEFAULT); //Verschlüsseln des Passworts
		 
		$statement = $pdo->prepare("INSERT INTO users (email, passwort) VALUES (:email, :passwort)");
		$result = $statement->execute(array('email' => $email, 'passwort' => $passwort_hash));
		//Überprüfung ob Registration erfolgreich war
		if($result) 
		{ 
			echo 'Du wurdest erfolgreich registriert. <a href="login1.php">Zum Login</a>'; //Weiterleitung zum Login
			$showFormular = false;
		} 
		else 
		{
			echo 'Beim Abspeichern ist leider ein Fehler aufgetreten<br>';
		}
	}  
}
 
if($showFormular) 
{
	?>
	 
	<form action="?register=1" method="post">
		E-Mail:
		<br>
		<input type="email" size="40" maxlength="250" name="email"><br><br>
		 
		Dein Passwort:
		<br>
		<input type="password" size="40"  maxlength="250" name="passwort"><br>
		 
		Passwort wiederholen:
		<br>
		<input type="password" size="40" maxlength="250" name="passwort2"><br><br>
		 
		<input type="submit" value="Registrieren">	<!-- Benutzer mit Email + Passwort registrieren -->	
	</form>
	<?php
} //Ende von if($showFormular)
?>
</body>
</html>