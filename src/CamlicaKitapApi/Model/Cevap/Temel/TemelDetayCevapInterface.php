<?php namespace CamlicaKitapApi\Model\Cevap\Temel;

interface TemelDetayCevapInterface
{
	/**
	 * @param object[] $kayit
	 */
	public function setKayit($kayit);

	/**
	 * @return object[]
	 */
	public function getKayit();
}