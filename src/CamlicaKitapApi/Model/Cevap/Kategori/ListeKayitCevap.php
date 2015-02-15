<?php namespace CamlicaKitapApi\Model\Cevap\Kategori;

/**
 * Created by PhpStorm.
 * User: irfan
 * Date: 11/2/14
 * Time: 11:57 AM
 */
class ListeKayitCevap
{
	public $id;
	public $adi;
	public $radi;
	public $kitap_sayisi;

	/**
	 * @var ListeKayitAltCevap[]
	 */
	public $alt_kategoriler = [];
}