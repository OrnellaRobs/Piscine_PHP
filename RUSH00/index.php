<?php
session_start();
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="menu.css">
	<title>LE MONDE DU SAC</title>
	<meta charset="utf-8">
</head>
<body>
	<div class="all-page">
		<header>
			<div class="wrapper-form-header">
				<?php
				if ($_SESSION["loggued_on_user"] === "" || !($_SESSION["loggued_on_user"]))
				{
					?>
					<form class="back-end" method="post" action="login.html">
						<input class="back-end-header" type="submit" name="submit" value="Se Connecter">
					</form>
					<?
				}
				else
				{
					?>
					<form class="Panier" method="post" action="logout.php">
						<input class="back-end-header" type="submit" name="submit" value="Se Deconnecter">
					</form>
					<form class="Panier" method="post" action="./account.php">
						<input class="back-end-header" type="submit" name="submit" value="Mon compte">
					</form>
					<?php
				}
				?>
				<form class="Panier" method="post" action="./panier.php">
					<input class="back-end-header" type="submit" name="submit" value="Panier">
				</form>
				<form class="Panier" method="post" action="./inscript.html">
					<input class="back-end-header" type="submit" name="submit" value="S'inscrire">
				</form>
				<form class="Panier" method="post" action="./admin.html">
					<input class="back-end-header" type="submit" name="submit" value="Admin">
				</form>
			</div>
		</header>
		<div class="header-2">
<div class="wrapper-navigation-bar">
	<ul class="navigation-bar">
		<li class="category"><a href="index.php">ACCESSOIRES</a></li>
		<li class="category"><a href="index.php?name=sac">SAC</a></li>
		<li class="category"><a href="index.php?name=montre">MONTRE</a></li>
	</ul>
</div>
</div>
<div class="site-name">
	<center><img src="http://lemondedusac.com/wp-content/uploads/2016/03/logo.png" width="20%"/></center>
</div>
<img class="img-header" src="https://i.goopics.net/3nd7b.jpg"/>
<div class="promo">-10€ SUR TOUT LE SITE POUR TOUTE COMMANDE</div>
<table>
	<tr>
		<?php include"article.php"; ?>
	</tr>
</table>
<div class="bottom-page">Copyright © mavagner/orazafin -All Rights Reserved.</div>
</div>
</body>
</html>
