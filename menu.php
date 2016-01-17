<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8" />
<title>Ustawienia</title>
</head>
<body>
<?php
	echo 'Ustawienia [<a href="index.php">Strona Główna</a> ]</p>';
	?>
<form action="zmien.php" style="float:left" method="post">
		<input type="submit" value="Zmień hasło" name="z_haslo" />
</form>
<form action="zmien.php" method="post">
		<input type="submit" value="Zmień e-mail" name="e_haslo" />
</form>
</body>
</html>