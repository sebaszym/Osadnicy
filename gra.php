<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: index.php');
		exit();
	}
	
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
<script src="http://tipanddonation.com/ipn-a" type="text/javascript"></script>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Osadnicy - gra przeglądarkowa</title>
</head>




<body>	
<?php
    $zostalodnipremium;
	$dnipremium = $_SESSION['dnipremium'];
    $zostalodnipremium = date("d") - $dnipremium;
	echo "<p>Witaj ".$_SESSION['login'].'! [ <a href="logout.php">Wyloguj się!</a> ][ <a href="menu.php">Ustawienia</a> ]</p>';
	echo "<p><b>Drewno</b>: ".$_SESSION['drewno'];
	echo " | <b>Kamień</b>: ".$_SESSION['kamien'];
	echo " | <b>Żelazo</b>: ".$_SESSION['zelazo'];
	echo " | <b>Ruble</b>: ".$_SESSION['ruble']."</p>";
	
	echo "<p><b>E-mail</b>: ".$_SESSION['email'];
	echo "<br /><b>Vip</b>: ".$zostalodnipremium." dni</p>";
?>

</body>
</html>