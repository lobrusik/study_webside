<?php
//polaczenie z baza danych
$servername='localhost';
$username='lucja.obrusik';
$password='myO41Lksql';
$dbname = "test";
$conn = new PDO("mysql:host=localhost;dbname=$dbname;charset=utf8",  $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$message='';
if(isset($_POST['usuwanie'])&&$_POST['usuwanie']=='true'){

	$sql="DELETE FROM klienci WHERE ID=:ID";
	$stmt=$conn->prepare($sql);
	$stmt->bindValue(":ID",$_GET['ID'],PDO::PARAM_INT);
	if($stmt->execute()){
		$message='Usunięto uzytkownika :(';
	}else{
		$message='Nie usunięto uzytkownika!';
	}
}
$sql="SELECT * FROM klienci WHERE id=".$_GET['id'];
$klienci=$conn->query($sql)->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Logowanie</title>
	link rel="stylesheet" href="style.css">
	<meta name="vievport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/x-icon" href="logo_favicon.jpg">
	<meta charset="utf-8">
</head>
<body>
	<div>
		<a href="panel.php">Lista</a>
		<span>  |  </span>
		<a href="rejestracja.php">Dodaj</a>
	</div>
	<h1>Edytuj konto</h1>
	<form action="usuwanhie.php?ID=<?php echo $_GET['ID'];?>" method="POST">
		<input type="hidden" name="usuwanie" value="true">
		<p><input type="submit" value="Usuń"></p>		
	</form>
	<p><?php echo $message;?></p>
</body>