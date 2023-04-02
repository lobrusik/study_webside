<?php
$servername='localhost';
$username='lucja.obrusik';
$password='myO41Lksql';
$dbname = "test";
$message='';

$conn = new PDO("mysql:host=localhost;dbname=$dbname;charset=utf8",  $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if(isset($_POST['rejestracja'])&&$_POST['rejestracja']=='true'){
	if($_POST['login']==''){
		$message='Podaj login!';
	}else{
		$sql="INSERT INTO klienci (login,haslo,email,zamowienie) VALUES (:login,:haslo,:email,:zamowienie)";
		$stmt=$conn->prepare($sql);
		$stmt->bindValue(":login",$_POST['login'],PDO::PARAM_STR);
		$stmt->bindValue(":haslo",$_POST['haslo'],PDO::PARAM_STR);
		$stmt->bindValue(":email",$_POST['email'],PDO::PARAM_STR);
		$stmt->bindValue(":zamowienie",$_POST['zamowienie'],PDO::PARAM_STR);
		if($stmt->execute()){
			$message='Dodano użytkownika!';
		}else{
			$message='Nie dodano użytkownika!';
		}
	}
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Rejestracja</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
	<meta name="vievport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/x-icon" href="logo_favicon.jpg">

</head>
<body>
	<div>
		<a href="panel.php">Jednak mam konto</a>
		<span>  |  </span>
		<a href ="projekt.php">Przejdz do strony glownej.</a>
	</div>
	<h1>Rejestracja</h1>
	<form action="rejestracja.php" method="POST">
		<p><label>Login</label></p>
		<p><input type="text" name="login"></p>
		<p><label>Hasło</label></p>
		<p><input type="password" name="haslo"></p>
		<p><label>email</label></p>
		<p><input type="text" name="email"></p>
		<p><label>Zamowienie</label></p>
		<p><input type="text" name="zamowienie"></p>
            	<input type="hidden" name="rejestracja" value="true">
		<p><input type="submit" value="Zarejestruj się"></p>		
	</form>
	<p><?php echo $message;?></p>
</body>