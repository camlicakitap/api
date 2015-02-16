<?php namespace CamlicaKitapApi\Model;

class Yazar
{
	public $id;
	public $adi;
	public $radi;
	public $hakkinda;
	public $kitap_sayisi;

	/**
	 * @param object $kayit
	 */
	public function __construct($kayit)
	{
		$this->id = $kayit->id;
		$this->adi = $kayit->adi;
		$this->radi = $kayit->radi;
		$this->hakkinda = isset($kayit->hakkinda) ? $kayit->hakkinda : null;
		$this->kitap_sayisi = isset($kayit->kitap_sayisi) ? $kayit->kitap_sayisi : null;
	}
}