#!/usr/bin/php
<?php
function 	ft_is_sort($tab)
{
	$i = 0;
	$size = count($tab);
	$copy = array();
	$copy = $tab;
	sort($copy);
	while ($i < $size)
	{
		if ($tab[$i] != $copy[$i])
			return (false);
		$i++;
	}
	return (true);
}
?>
