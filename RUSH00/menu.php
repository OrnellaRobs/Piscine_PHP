<?php session_start();
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="./menu.css">
	<meta charset="utf-8">
	<title>Magic_shop</title>
</head>

<body>
<header>
<?php

if ($_SESSION["loggued_on_user"] === "" || !($_SESSION["loggued_on_user"]))
{
	?><form method="post" action="login.html">
		<input type="submit" name="submit" value="se connecter">
	</form>
	<?
}
else
{
	?><form method="post" action="logout.php">
		<input type="submit" name="submit" value="se deconnecter">
	</form>
	<form class="panier" method="post" action="./account.php">
		<input type="submit" name="submit" value="Mon compte">
	</form>
	<?php
}
?>
	<form class="Panier" method="post" action="./panier.php">
		<input type="submit" name="submit" value="Panier">
	</form>
	<form class="Panier" method="post" action="./inscript.html">
		<input type="submit" name="submit" value="S'inscrire">
	</form>
	<form class="admin" method="post" action="./admin.html">
		<input type="submit" name="submit" value="Admin">
	</form>
	</header>
</body>
</html>