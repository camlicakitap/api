<?php namespace CamlicaKitapApi\Model\Cevap\Kategori;

use CamlicaKitapApi\Model\Cevap\Temel\GenelCevap;

/**
 * Created by PhpStorm.
 * User: irfan
 * Date: 11/2/14
 * Time: 11:52 AM
 */

class ListeCevap extends GenelCevap
{
	/**
	 * @var ListeKayitCevap[]
	 */
	public $kayitlar = array();

	/**
	 * @param object[] $kayitlar
	 */
	public function __construct($kayitlar)
	{
		// objeler üzerinde dönelim
		foreach ($kayitlar as $kayit) {

			$yeniKayit = new ListeKayitCevap();

			// temel bilgileri set edelim
			$yeniKayit->id = $kayit->id;
			$yeniKayit->adi = $kayit->adi;
			$yeniKayit->radi = $kayit->radi;
			$yeniKayit->kitap_sayisi = $kayit->kitap_sayisi;

			// alt kategorileri dolduralım
			foreach ($kayit->alt_kategoriler as $altKategori) {

				$yeniKayit->alt_kategoriler[] = new ListeKayitAltCevap($altKategori);
			}

			// yeni kaydı ekleyelim
			$this->kayitlar[] = $yeniKayit;
		}
	}
}