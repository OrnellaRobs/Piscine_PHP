#!/usr/bin/php
<?php

function ft_split($str)
{
	$string = explode(" ", $str);
	$string = preg_split('/\s+/', $str);
	sort($string);
	return ($string);
}
?>
