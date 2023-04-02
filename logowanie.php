<?php
//polaczenie z baza danych
$servername='localhost';
$username='lucja.obrusik';
$password='myO41Lksql';
$dbname = "test";

?>
<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
	<meta name="vievport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/x-icon" href="logo_favicon.jpg">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>Logowanie</title>
</head>

<body>
    <h1>Witaj! Zaloguj się:</h1>
<a href ="rejestracja.php">Nie mam konta.</a>
<span>  |  </span>
<a href ="projekt.php">Przejdz do strony glownej.</a>
<span>  |  </span>
<a href ="https://www.instagram.com/stories/highlights/17925819923215339/">PLZ ZALOZ KONTO W MBANKU Z MOJEGO LINKA!!!</a>

    <form style="margin-left=auto;margin-right=auto;width=95%;" action="zaloguj.php" method="post">
        Login: <br/><input type="text" name="login"/><br/>
        Haslo: <br/><input type="password" name="haslo"/><br/><br/>
        <input type="submit" value="Zaloguj się"/>
    </form>

<?php
	if(isset($_SESSION['blad']))	echo $_SESSION['blad'];
?>

</body>
</html>