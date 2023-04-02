<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: logowanie.php');
		exit();
	}
	
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
    <link rel="stylesheet" href="style.css">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="vievport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/x-icon" href="logo_favicon.jpg">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<title>Panel - matma + infa</title>
</head>

<body>
	
<?php

	echo "<p>Witaj ".$_SESSION['login'].'! [ <a href="wylogowanie.php">Wyloguj się!</a> ]</p>'; 
	echo "<p><b>E-mail</b>: ".$_SESSION['email'];
	echo "<br /><b>Pakiet</b>: ".$_SESSION['zamowienie']."</p>";
?>
<h1>Miłego dzionka i smacznej kawusi</h1>
<a href ="projekt.php">Powrót do strony głównej.</a>
<a href ="EdycjaKonta.php">Edytuj konto.</a>
<a href ="https://www.instagram.com/stories/highlights/17925819923215339/"target="_blank">
<img src="mbank.png" alt="mbank" style="width:50px;height:50px;"></a>
<img src="ser.jpg" alt="Sera stos" width="100%";height:100%>
<a href="usuwanie.php">Opusc nasze piekne grono</a>

</body>
</html>