<?php namespace CamlicaKitapApi\Model;

class Kategori
{
	public $id;
	public $adi;
	public $radi;
	public $kitap_sayisi;

	/**
	 * @var Kategori[]
	 */
	public $alt_kategoriler = [];
}