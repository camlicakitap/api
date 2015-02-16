<?php namespace CamlicaKitapApi\Model;

class Dil
{
	public $id;
	public $adi;

	/**
	 * @param object $kayit
	 */
	public function __construct($kayit)
	{
		// temel bilgileri set edelim
		$this->id = $kayit->id;
		$this->adi = $kayit->adi;
	}
}