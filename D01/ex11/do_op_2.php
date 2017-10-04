#!/usr/bin/php
<?php
if ($argc != 2)
{
	echo "Incorrect Parameters\n";
	return ;
}
$param1 = trim($argv[1]);
$operator = preg_match("/[\+\-\*\%\/]/", $param1);
if ($operator == 1)
{
	if ($var = strripos($param1, "+"))
		$op = '+';
	else if ($var = strripos($param1, '-'))
		$op = '-';
	else if ($var = strripos($param1, '*'))
		$op = '*';
	else if ($var = strripos($param1, '%'))
		$op = '%';
	else if ($var = strripos($param1, '/'))
		$op = '/';
}
$string = preg_split('/[\+\-\*\%\/]/', $param1);
$nb_param = count($string);
if ($nb_param != 2)
	return ;
if ($op == '+')
	echo $string[0] + $string[1] , "\n";
else if ($op == '-')
	echo $string[0] - $string[1] , "\n";
else if ($op == '*')
	echo $string[0] * $string[1] , "\n";
else if ($op == '%')
	echo $string[0] % $string[1] , "\n";
else if ($op == '/')
	echo $string[0] / $string[1] , "\n";
?>
