<?php 


class Frog extends Animal{
	public $loncat="hop hop";
	public $legs=4;

	public function jump()
	{
		return $this->loncat;
	}
}
$kodok = new Frog("buduk");
$kodok->jump() ; // "hop hop"

 ?>