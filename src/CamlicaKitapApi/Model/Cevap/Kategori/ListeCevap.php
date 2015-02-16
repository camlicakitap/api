<?php namespace CamlicaKitapApi\Model\Cevap\Kategori;

use CamlicaKitapApi\Model\Cevap\Temel\TemelCevap;
use CamlicaKitapApi\Model\Kategori;

/**
 * Created by PhpStorm.
 * User: irfan
 * Date: 11/2/14
 * Time: 11:52 AM
 */

class ListeCevap extends TemelCevap
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

			// yeni kaydı ekleyelim
			$this->kayitlar[] = new Kategori($kayit);
		}
	}
}