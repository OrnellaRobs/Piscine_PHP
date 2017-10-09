<?php
	session_start();
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
		$i = 0;
		foreach ($pass as $key => $elem)
		{
			if ($elem["login"] === $_SESSION["loggued_on_user"])
			{
				unset($pass[$i]);
			}
			$i++;
		}
		file_put_contents("./private/passwd", serialize($pass1));
	}
	unset($_SESSION["loggued_on_user"]);
	session_destroy();
	header('Location: ./index.php');
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Attention</title>
	<link rel="stylesheet" type="text/css" href="./connexion.css">
</head>
<body>
	<form method="post" action="./index.php" class="box">
	<h1>
		Compte supprimé !
		<input class="button" type="submit" value="Retour Menu" style="color:white"/>
	</h1>
	</form>
</div>	
</body>
</html>