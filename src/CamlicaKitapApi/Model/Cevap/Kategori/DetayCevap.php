<?php namespace CamlicaKitapApi\Model\Cevap\Kategori;

use CamlicaKitapApi\Model\Cevap\Temel\TemelDetayCevap;
use CamlicaKitapApi\Model\Cevap\Temel\TemelDetayCevapInterface;
use CamlicaKitapApi\Model\Kategori;

/** @noinspection PhpUndefinedClassInspection */
class DetayCevap extends TemelDetayCevap implements TemelDetayCevapInterface
{
	/**
	 * @param object $kayit
	 */
	public function setKayit($kayit)
	{
		$this->kayit = new Kategori($kayit);
	}

	/**
	 * @return Kategori
	 */
	public function getKayit()
	{
		return $this->kayit;
	}
}