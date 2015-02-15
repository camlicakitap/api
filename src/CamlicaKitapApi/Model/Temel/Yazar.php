<?php namespace CamlicaKitapApi\Model\Temel;

class Yazar
{
	public $id;
	public $adi;
	public $radi;

	/**
	 * @param object $kayit
	 */
	public function __construct($kayit)
	{
		$this->id = $kayit->id;
		$this->adi = $kayit->adi;
		$this->radi = $kayit->radi;
	}
}