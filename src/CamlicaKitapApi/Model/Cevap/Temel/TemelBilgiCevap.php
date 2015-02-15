<?php namespace CamlicaKitapApi\Model\Cevap\Temel;

class TemelBilgiCevap extends TemelCevap
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