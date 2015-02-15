<?php namespace CamlicaKitapApi\Model\Cevap\Yazar;

use CamlicaKitapApi\Model\Cevap\Temel\TemelListeCevap;
use CamlicaKitapApi\Model\Cevap\Temel\TemelListeCevapInterface;
use CamlicaKitapApi\Model\Temel\Yazar;

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
			$this->kayitlar[] = new Yazar($kayit);
		}
	}

	/**
	 * @return Yazar[]
	 */
	public function getKayitlar()
	{
		return $this->kayitlar;
	}
}