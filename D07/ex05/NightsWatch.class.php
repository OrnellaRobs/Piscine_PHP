<?php
class NightsWatch {
	public $tab = array();
	function recruit($pers)
	{
		if ($pers instanceof IFighter)
			$this->tab[] = $pers;
	}
	function fight()
	{
		foreach ($this->tab as $value)
		{
			$value->fight();
		}
	}
}
?>