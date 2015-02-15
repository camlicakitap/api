<?php namespace CamlicaKitapApi\Model\Cevap\Kitap;

use CamlicaKitapApi\Model\Cevap\Temel\TemelListeCevap;
use CamlicaKitapApi\Model\Cevap\Temel\TemelListeCevapInterface;
use CamlicaKitapApi\Model\Temel\Kitap;

class ListeCevap extends TemelListeCevap implements TemelListeCevapInterface
{
	/**
	 * @param object[] $kayitlar
	 */
	public function setKayitlar($kayitlar)
	{
		// objeler üzerinde dönelim
		foreach ($kayitlar as $kayit) {

			// yeni kaydı ekleyelim
			$this->kayitlar[] = new Kitap($kayit);
		}
	}

	/**
	 * @return Kitap[]
	 */
	public function getKayitlar()
	{
		return $this->kayitlar;
	}
}