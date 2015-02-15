<?php namespace CamlicaKitapApi\Model\Temel;

class Kitap
{
	public $id;
	public $adi;
	public $radi;
	public $resim_uzantisi;
	public $liste_fiyati;
	public $uye_fiyati;

	/**
	 * @var Yazar
	 */
	public $yazarlar = [];
}