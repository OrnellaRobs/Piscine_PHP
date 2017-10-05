#!/usr/bin/php
<?php
if ($argc >= 2)
{
	$arg = preg_replace('!\s+!', ' ', $argv[1]);
	$arg = trim($arg);
	echo $arg , "\n";
	return ($string);
}
?>
