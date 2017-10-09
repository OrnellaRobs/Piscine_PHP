<?php
	session_start();
if (!($_SESSION["loggued_on_user"] === "admin"))
{
	header("Location: ./index.php");
}
else
{
	?>
	<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="menu.css">
		<title>Connexion</title>
	</head>
	<body  style= "background-image:url(http://www.arcturius.org/chroniques/wp-content/uploads/2015/04/Flat-Ocean.jpeg)">
		<div class='admin-page'>
			<div class='admin-page-content')
			<form method="post">
			<div class="list-user">Liste des comptes:</div>
			<h1>
			admin <br \><?php
			if (!(file_exists("./private")))
			{
				mkdir("./private");
			}
			if (!(file_exists("./private/passwd")))
			{
				$fd = fopen("./private/passwd", 'w+');
			}
			$pass = unserialize(file_get_contents("./private/passwd"));
			if ($pass)
			{
				foreach ($pass as $key => $elem)
				{
					echo $elem['login']."<BR/>";
				}
			}
		?>
		</h1>
		</form>
		<form method="post" action="./modifadmin.html">
			<input class="button" type="submit" name="submit" value="Modifier un compte">
			</form>
		<form method="post" action="./index.php">
			<input class="button" type="submit" name="submit" value="Page d'accueil">
		</form>
		<form method="post" action="./gestion.php">
			<input class="button" type="submit" name="submit" value="Gerer articles">
		</form>
	</div>
	</div>
	</body>
	</html>
<?php
}
?>