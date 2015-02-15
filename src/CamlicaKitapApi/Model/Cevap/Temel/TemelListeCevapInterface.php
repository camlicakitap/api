<?php namespace CamlicaKitapApi\Model\Cevap\Temel;

interface TemelListeCevapInterface
{
	/**
	 * @param object[] $kayitlar
	 */
	public function setKayitlar($kayitlar);

	/**
	 * @return object[]
	 */
	public function getKayitlar();
}