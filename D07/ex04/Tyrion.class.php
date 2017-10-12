<?php
class Tyrion extends Lannister {
	public function sleepWith($obj)
	{
		if (is_a($obj, 'Lannister') === True)
		{
			print("Not even if I'm drunk !\n");
		}
		else {
			print("Let's do this.\n");
		}
	}
}
?>