<?php
//polaczenie z baza danych
$servername='localhost';
$username='lucja.obrusik';
$password='myO41Lksql';
$dbname = "test";
$message='';
if(isset($_POST['EdycjaKonta'])&&$_POST['EdycjaKonta']=='true'){
	if($_POST['login']==''){
		$message='Podaj login!';
	}else{
		$sql="UPDATE klienci SET login=:login,haslo=:haslo,email=:email,zamowienie=:zamowienie WHERE ID=:ID";
		$stmt=$conn->prepare($sql);
		$stmt->bindValue(":ID",$_GET['ID'],PDO::PARAM_INT);
		$stmt->bindValue(":login",$_POST['login'],PDO::PARAM_STR);
		$stmt->bindValue(":haslo",$_POST['haslo'],PDO::PARAM_INT);
		$stmt->bindValue(":email",$_POST['email'],PDO::PARAM_STR);
		$stmt->bindValue(":zamowienie",$_POST['zamowienie'],PDO::PARAM_STR);
		if($stmt->execute()){
			$message='Edytowano konto!';
		}else{
			$message='Nie edytowano konta!';
		}
	}
}
$sql="SELECT * FROM klienci WHERE ID=".$_SESION['ID'].';
$klienci=$conn->query($sql)->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edycja Konta</title>
	<link rel="stylesheet" href="style.css">
	<meta name="vievport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/x-icon" href="logo_favicon.jpg">
</head>
<body>
	<div>
		<a href="panel.php">Lista</a>
		<span>  |  </span>
	</div>
	<h1>Edytuj konto</h1>
	<form action="EdycjaKonta.php? ID=<?php echo ".$_SESION['ID'].';?>" method="POST">
		<p><label>Login</label></p>
		<p><input type="text" name="login" value="<?php echo $klienci['login'];?>"></p>
		<p><label>Hasło</label></p>
		<p><input type="text" name="haslo" value="<?php echo $klienci['haslo'];?>"></p>
		<p><label>email</label></p>
		<p><input type="text" name="email" value="<?php echo $klienci['email'];?>"></p>
		<p><label>Pakiet (matma, infa, 2w1)</label></p>
		<p><input type="text" name="zamowienie" value="<?php echo $klienci['zamowienie'];?>"</p>
		<input type="hidden" name="EdycjaKonta" value="true">
		<p><input type="submit" value="Edytuj"></p>		
	</form>
	<p><?php echo $message;?></p>
</body>