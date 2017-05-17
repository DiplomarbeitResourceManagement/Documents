<?php 
	session_start();	//Eine neue Session wird gestartet
	$pdo = new PDO('mysql:host=localhost;dbname=user', 'root', ''); //Abspeichern der Parameter für Verbindungsaufbau zu Datenbank
	 
	if(isset($_GET['login'])) 
	{
		 $email = $_POST['email'];
		 $passwort = $_POST['passwort'];
		 
		 $statement = $pdo->prepare("SELECT * FROM users WHERE email = :email");	//Auslesen der Daten aus der Datenbank wo die eingegebene E-Mail Adresse übereinstimmt
		 $result = $statement->execute(array('email' => $email));
		 $user = $statement->fetch();	
		 
		 //Überprüfung des Passworts und der E-Mail Adresse
		 if ($user !== false && password_verify($passwort, $user['passwort'])) 
		 {
			 $_SESSION['userid'] = $user['id'];
			 die('Login erfolgreich. Weiter zum <a href="index.php">internen Bereich</a>'); //Weiterleitung zur Startseite
		 } 
		 else 
		 {
			$errorMessage = "E-Mail oder Passwort war ungültig<br>";
		 }
	}
?>
<!DOCTYPE html> 
<html> 
<head>
	<title>Login</title> 
</head> 
<body>
	<?php 
		if(isset($errorMessage))
		{
			echo $errorMessage;
		}
	?>
 
	<form action="?login=1" method="post">
		<!-- E-Mail Eingabefeld-->
		E-Mail:
		<br>
		<input type="email" size="40" maxlength="250" name="email"><br><br>
		<!--Passwort Eingabefeld-->
		Dein Passwort:
		<br>
		<input type="password" size="40"  maxlength="250" name="passwort"><br>
		 
		<input type="submit" value="LOGIN">	<!-- Button um Login zu bestätigen-->
	</form>
</body>
</html>