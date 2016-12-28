<?php namespace CamlicaKitapApi\Model\Cevap\Kitap;

use CamlicaKitapApi\Model\Cevap\Temel\TemelDetayCevap;
use CamlicaKitapApi\Model\Cevap\Temel\TemelDetayCevapInterface;
use CamlicaKitapApi\Model\Kitap;

class DetayCevap extends TemelDetayCevap implements TemelDetayCevapInterface
{
	/**
	 * @param object $kayit
	 */
	public function setKayit($kayit)
	{
		$this->kayit = new Kitap($kayit);
	}

	/**
	 * @return Kitap
	 */
	public function getKayit()
	{
		return $this->kayit;
	}
}