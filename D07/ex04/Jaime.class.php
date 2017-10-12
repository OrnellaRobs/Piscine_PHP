<?php
class Jaime extends Lannister {
	function sleepWith($obj)
	{
		$class = get_class($obj);
		if ($class === "Tyrion")
			print("Not even if I'm drunk !\n");
		else if ($class === "Cersei")
			print("With pleasure, but only in a tower in Winterfell, then.\n");
		else if ($class === "Sansa")
			print("Let's do this.\n");
	}
}
?>