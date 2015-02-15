<?php namespace CamlicaKitapApi\Model\Cevap\Kitap;

use CamlicaKitapApi\Model\Cevap\Temel\GenelCevap;
use CamlicaKitapApi\Model\Temel\Kitap;
use CamlicaKitapApi\Model\Temel\Yazar;

/**
 * Created by PhpStorm.
 * User: irfan
 * Date: 11/2/14
 * Time: 11:52 AM
 */

class YeniEklenenlerCevap extends GenelCevap
{
	/**
	 * @var Kitap[]
	 */
	public $kayitlar = [];

	public function __construct($sonuc)
	{
		$this->sonuc = $sonuc;
	}

	/**
	 * @param object[] $kayitlar
	 */
	public function setKayitlar($kayitlar)
	{
		// objeler üzerinde dönelim
		foreach ($kayitlar as $kayit) {

			$yeniKayit = new Kitap();

			// temel bilgileri set edelim
			$yeniKayit->id = $kayit->id;
			$yeniKayit->adi = $kayit->adi;
			$yeniKayit->radi = $kayit->radi;
			$yeniKayit->resim_uzantisi = $kayit->resim_uzantisi;
			$yeniKayit->liste_fiyati = $kayit->liste_fiyati;
			$yeniKayit->uye_fiyati = $kayit->uye_fiyati;

			// alt kategorileri dolduralım
			foreach ($kayit->yazarlar as $yazar) {

				$yeniKayit->yazarlar[] = new Yazar($yazar);
			}

			// yeni kaydı ekleyelim
			$this->kayitlar[] = $yeniKayit;
		}
	}
}