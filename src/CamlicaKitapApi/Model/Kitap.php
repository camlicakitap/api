<?php namespace CamlicaKitapApi\Model;

class Kitap
{
	public $id;
	public $adi;
	public $radi;
	public $resim_uzantisi;
	public $liste_fiyati;
	public $uye_fiyati;

	/**
	 * @var Yazar
	 */
	public $yazarlar = [];

	/**
	 * @param object $kayit
	 */
	public function __construct($kayit)
	{
		// temel bilgileri set edelim
		$this->id = $kayit->id;
		$this->adi = $kayit->adi;
		$this->radi = $kayit->radi;
		$this->resim_uzantisi = $kayit->resim_uzantisi;
		$this->liste_fiyati = $kayit->liste_fiyati;
		$this->uye_fiyati = $kayit->uye_fiyati;

		// alt kategorileri dolduralım
		foreach ($kayit->yazarlar as $yazar) {

			$this->yazarlar[] = new Yazar($yazar);
		}
	}
}