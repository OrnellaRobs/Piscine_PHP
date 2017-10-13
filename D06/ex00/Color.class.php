<?php
Class Color {
	public $red = 0;
	public $green = 0;
	public $blue = 0;
	static $verbose = False;

	function __construct(array $tab) {
		if (array_key_exists('rgb', $tab))
		{
			$this->red = (0xFF0000 & intval($tab['rgb']));
			$this->green = (0x00FF00 & intval($tab['rgb'])) >> 8;
			$this->blue = (0x0000FF & intval($tab['rgb'])) >> 16;
		}
		if (array_key_exists('red', $tab))
			$this->red = intval($tab['red']);
		if (array_key_exists('green', $tab))
			$this->green = intval($tab['green']);
		if (array_key_exists('blue', $tab))
			$this->blue = intval($tab['blue']);
		if (Self::$verbose)
			return (printf("Color( red: % 3d, green: % 3d, blue: % 3d ) constructed.\n", $this->red, $this->green, $this->blue));
	}
	static function doc() {
		$doc = file_get_contents('./Color.doc.txt');
		return ($doc."\n");
	}

	function add($toadd) {
		return new Color(array('red' => $this->red + $toadd->red, 'green' => $this->green + $toadd->green, 'blue' => $this->blue + $toadd->blue));
	}

	function sub($tosub) {
		return new Color(array('red' => $this->red - $tosub->red, 'green' => $this->green - $tosub->green, 'blue' => $this->blue - $tosub->blue));
	}

	function mult($tomult) {
		return new Color(array('red' => $this->red * $tomult->red, 'green' => $this->green * $tomult->green, 'blue' => $this->blue * $tomult->blue));
	}

	function __toString() {
		return (vsprintf("Color( red: % 3d, green: % 3d, blue: % 3d )\n", array($this->red, $this->green, $this->blue)));
	}

	function __destruct() {
		if (Self::$verbose)
			return (printf("Color( red: % 3d, green: % 3d, blue: % 3d ) destructed.\n", $this->red, $this->green, $this->blue));
	}
}
?>