<?php namespace CamlicaKitapApi\Model\Cevap\Kitap;

use CamlicaKitapApi\Model\Cevap\Temel\GenelCevap;

/**
 * Created by PhpStorm.
 * User: irfan
 * Date: 11/2/14
 * Time: 11:52 AM
 */

class BilgiCevap extends GenelCevap
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