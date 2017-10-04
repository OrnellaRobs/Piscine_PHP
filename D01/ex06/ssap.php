#!/usr/bin/php
<?php
	function ft_split($str)
	{
		$arg = explode(" ", $str);
		$string = preg_split('/\s+/', $str);
		sort($string);
		return ($string);
	}
	function aff_array($array, $size)
	{
	 	$i = 0;
	 	while ($i < $size)
		{
			echo $array[$i]."\n";
	 		$i++;
		}
	}
	$result_array = array();
	$i = 1;
	while ($argc >= 2 && $i < $argc)
	{
		$tab = array();
		$tab = ft_split(trim($argv[$i]));
		if ($i == 1)
			$result_array = $tab;
		else
			$result_array = array_merge($result_array, $tab);
		$i++;
	}
	sort($result_array);
	aff_array($result_array, count($result_array));
?>
