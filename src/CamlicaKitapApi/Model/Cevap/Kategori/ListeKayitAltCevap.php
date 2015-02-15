<?php namespace CamlicaKitapApi\Model\Cevap\Kategori;

/**
 * Created by PhpStorm.
 * User: irfan
 * Date: 11/2/14
 * Time: 11:57 AM
 */
class ListeKayitAltCevap
{
	public $id;
	public $adi;
	public $radi;
	public $kitap_sayisi;

	/**
	 * @param object $kayit
	 */
	public function __construct($kayit)
	{
		$this->id = $kayit->id;
		$this->adi = $kayit->adi;
		$this->radi = $kayit->radi;
		$this->kitap_sayisi = $kayit->kitap_sayisi;
	}
}