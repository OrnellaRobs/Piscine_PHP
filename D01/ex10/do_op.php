#!/usr/bin/php
<?php
if ($argc != 4)
{
	echo "Incorrect Parameters\n";
	return ;
}
$param1 = trim($argv[1]);
$param = trim($argv[2]);
$param2 = trim($argv[3]);

if ($param == '+')
	echo $param1 + $param2 , "\n";
else if ($param == '-')
	echo $param1 - $param2 , "\n";
else if ($param == '%')
	echo $param1 % $param2 , "\n";
else if ($param == '*')
	echo $param1 * $param2 , "\n";
else if ($param == '/')
	echo $param1 / $param2 , "\n";
?>
