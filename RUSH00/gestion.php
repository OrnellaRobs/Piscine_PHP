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
	<body style="text-align: center">
		<div class='admin-page'>
			<form method="post" action ="./addarticle.php">
				<div class='admin-page-gestion'>
				<h1>Image (chemin relatif) <input type="text" name ="img"/>
				<BR />
				Nom: <input type="text" name ="nom"/>
				<BR />
				Prix: <input type="text" name ="prix"/>
				<Br/>
				Categorie: <input type="text" name ="categorie"/>
				<br />
				<br />
				</h1>
			</div>
				<?php
			if (!(file_exists("./stock.csv")))
			{
				$fd = fopen("./stock.csv", 'w+');
			}
			else
			{
				$fd = fopen('stock.csv', 'r');
			}
			fgets($fd);
			$i = 0;
			while ($fd && !feof($fd))
			{
			    $a = explode(";", fgets($fd));
			    $db[$i]["img"] = $a[0];
			    $db[$i]["nom"] = $a[1];
			    $db[$i]["prix"] = $a[2];
			    $db[$i]["id"] = $a[3];
			    $db[$i]["categorie"] = $a[4];
			   	echo "$i: ".$db[$i]['nom']."<br />";
			    $i ++;
			}
		?>
		<input class="button" type="submit" name="submit" value="Ajouter un produit">
		</form>
		<form method="post" action="./index.php">
			<input class="button" type="submit" name="submit" value="Page d'accueil">
		</form>
		<hr />
		<div class='admin-page-gestion'>
		<form class="color-red" method="post" action="./delarticle.php">
			<h1>Article ID: <input type="text" name ="id"/>
				<br>
			<input class="button" type="submit" name="submit" value="Supprimer un article">
		</h1>
		</form>
	</div>
	</div>
	</body>
	</html>
<?php
}
?>