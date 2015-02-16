<?php namespace CamlicaKitapApi\Model;

class Kategori
{
	public $id;
	public $adi;
	public $radi;
	public $kitap_sayisi;

	/**
	 * @var Kategori[]
	 */
	public $alt_kategoriler = [];

	/**
	 * @param object $kayit
	 */
	public function __construct($kayit)
	{
		// temel bilgileri set edelim
		$this->id = $kayit->id;
		$this->adi = $kayit->adi;
		$this->radi = $kayit->radi;
		$this->kitap_sayisi = isset($kayit->kitap_sayisi) ? $kayit->kitap_sayisi : null;

		// alt kategoriler varsa
		if (isset($kayit->alt_kategoriler)) {

			// alt kategorileri dolduralım
			foreach ($kayit->alt_kategoriler as $altKayit) {

				$this->alt_kategoriler[] = new Kategori($altKayit);
			}
		}
	}
}