<?php namespace CamlicaKitapApi\Model\Cevap\Kategori;

use CamlicaKitapApi\Model\Cevap\Temel\GenelCevap;
use CamlicaKitapApi\Model\Temel\Kategori;

/**
 * Created by PhpStorm.
 * User: irfan
 * Date: 11/2/14
 * Time: 11:52 AM
 */

class ListeCevap extends GenelCevap
{
	/**
	 * @var Kategori[]
	 */
	public $kayitlar = [];

	/**
	 * @param object[] $kayitlar
	 */
	public function setKayitlar($kayitlar)
	{
		// objeler üzerinde dönelim
		foreach ($kayitlar as $kayit) {

			$yeniKayit = new Kategori();

			// temel bilgileri set edelim
			$yeniKayit->id = $kayit->id;
			$yeniKayit->adi = $kayit->adi;
			$yeniKayit->radi = $kayit->radi;
			$yeniKayit->kitap_sayisi = $kayit->kitap_sayisi;

			// alt kategorileri dolduralım
			foreach ($kayit->alt_kategoriler as $altKayit) {

				$altKategori = new Kategori();

				$altKategori->id = $altKayit->id;
				$altKategori->adi = $altKayit->adi;
				$altKategori->radi = $altKayit->radi;
				$altKategori->kitap_sayisi = $altKayit->kitap_sayisi;

				$yeniKayit->alt_kategoriler[] = $altKategori;
			}

			// yeni kaydı ekleyelim
			$this->kayitlar[] = $yeniKayit;
		}
	}
}