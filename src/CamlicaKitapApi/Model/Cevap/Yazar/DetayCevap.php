<?php namespace CamlicaKitapApi\Model\Cevap\Yazar;

use CamlicaKitapApi\Model\Cevap\Temel\TemelDetayCevap;
use CamlicaKitapApi\Model\Cevap\Temel\TemelDetayCevapInterface;
use CamlicaKitapApi\Model\Yazar;

class DetayCevap extends TemelDetayCevap implements TemelDetayCevapInterface
{
	/**
	 * @param object[] $kayit
	 */
	public function setKayit($kayit)
	{
		$this->kayit = new Yazar($kayit);
	}

	/**
	 * @return Yazar[]
	 */
	public function getKayit()
	{
		return $this->kayit;
	}
}