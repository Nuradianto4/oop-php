<?php 


class Ape extends Animal{
	public $suara="Auoo";

	public function yell()
	{
		return $this->suara;
	}
}
$sungokong = new Ape("kera sakti");
$sungokong->yell() // "Auooo"

 ?>