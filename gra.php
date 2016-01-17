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
<body>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="SXURWBVXXC85G">
<input type="image" src="https://www.paypalobjects.com/pl_PL/PL/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal – Płać wygodnie i bezpiecznie">
<img alt="" border="0" src="https://www.paypalobjects.com/pl_PL/i/scr/pixel.gif" width="1" height="1">
</form>
<div>Lub wyślij smsa pod numer 73068 o treści TC.TSP3.665177.[wiadomość]<br />Na przykład: TC.TSP3.665177.Bardzo fajna gra!</div>
<div>A to są wykonane dotacje sms:</div>
<div id="pwebLastPayments" class="PGRpdiBkYXRhLXBhcmFtcz0iP3A9Tlh3Mk5qVXhOemM9JmFjdGlvbkxhc3Q9ZCIgaWQ9InB3ZWJUYWJsZUxhc3REb25hdGUiPjwvZGl2Pg=="></div>
</body>
</html>