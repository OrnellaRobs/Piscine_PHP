#!/usr/bin/php
<?php
function ft_split($str)
{
	$str = trim($str);
	$string = explode(" ", $str);
	$string = preg_split('/\s+/', $str);
	sort($string);
	return ($string);
}
?>
