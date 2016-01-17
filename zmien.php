<?php
session_start();
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
	<title></title>
	
	<meta name="description" content="Opis w Google" />
	<meta name="keywords" content="słowa, kluczowe, wypisane, po, porzecinku" />
	
</head>

<body>
<?php

if (isset($_POST['z_haslo']))
{
	echo 'Zmień hasło [<a href="menu.php">Ustawienia</a> ]</p>';
	echo '<form method="post">';
	echo 'Twoje nowe hasło: <br />';
	echo '<input type="password" name="haslo1" /><br />';
	echo 'Powtórz hasło: <br />';
	echo '<input type="password" name="haslo2" /><br /><br />';
	echo '<input type="submit" value="Zmień hasło" name="z_haslo" />';
	echo '</form>';
}
else
{
	echo 'Zmień email [<a href="menu.php">Ustawienia</a> ]</p>';
	echo '<form method="post">';
	echo 'Wpisz nowy email: <br />';
	echo '<input type="text" name="email" /><br /><br />';
	echo '<input type="submit" value="Zmień email" name="z_haslo" />';
	echo '</form>';
}

?>
	
</body>
</html>