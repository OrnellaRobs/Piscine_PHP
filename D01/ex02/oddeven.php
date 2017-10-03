#!/usr/bin/php
<?php

while (1)
{
	echo "Entrez un nombre: ";
	$number = fgets(STDIN);
	if (ord($number) == 0x0)
		die;
	$number = trim($number);
	if (!is_numeric($number))
		echo "'", $number, "'", " n'est pas un chiffre\n";
	else if (($number % 2) == 0)
		echo "Le chiffre ",$number," est Pair\n";
	else
		echo "Le chiffre " ,$number, " est Impair\n";
	}
?>
