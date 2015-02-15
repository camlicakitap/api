<?php namespace CamlicaKitapApi\Model\Cevap\Kitap;

use CamlicaKitapApi\Model\Cevap\Temel\TemelCevap;

class BilgiCevap extends TemelCevap
{
	/**
	 * @var int
	 */
	public $adet;

	/**
	 * @param object $bilgi
	 */
	public function setBilgi($bilgi)
	{
		$this->adet = $bilgi->adet;
	}
}