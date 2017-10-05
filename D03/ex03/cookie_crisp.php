<?php
if (isset($_GET['action']) && isset($_GET['name']) && isset($_GET['value']) && $_GET['action'] == "set")
	setcookie($_GET['name'], $_GET['value']);
if (isset($_GET['action']) && isset($_GET['name']) && !isset($_GET['value']) && $_GET['action'] == "get")
	if (isset($_COOKIE[$_GET['name']]))
		echo $_COOKIE[$_GET['name']]."\n";
if (isset($_GET['action']) && isset($_GET['name']) && !isset($_GET['value']) && $_GET['action'] == "del")
	setcookie($_GET['name'], "", time() - 3600);
?>
