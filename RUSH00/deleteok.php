<?php
	session_start();
?>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="menu.css">
	<title>Attention</title>
</head>
<body>
	<div class="deleteok-page">
		<div class="deleteok">
	<form method="post" action="./delete.php">
	<h1>
		ETES VOUS SUR de vouloir supprimer<br/>
		votre compte: <?php echo $_SESSION["loggued_on_user"]."<BR?>"?>
		<input class="button-oui" type="submit" value="OUI"/>
	</h1>
	</form>
</div>
<form method="post" action="./index.php">
	<input class="button" type="submit" value="Retour Menu"/>
</div>
</form>
</body>
</html>
