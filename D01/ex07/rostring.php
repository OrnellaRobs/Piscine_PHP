#!/usr/bin/php
<?php

function ft_split($str)
{
	$string = explode(" ", $str);
	$string = preg_split('/\s+/', $str);
	return ($string);
}
	$tab = array();
	$tab = ft_split($argv[1]);
	$i = 1;
	$size = count($tab);
	if ($argc > 1)
	{
		while ($i < $size)
		{
			echo $tab[$i], ' ';
			$i++;
		}
		echo "$tab[0]\n";
	}
?>
