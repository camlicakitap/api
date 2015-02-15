<?php namespace CamlicaKitapApi\Model\Istek\Temel;

abstract class GenelIstek
{
	/**
	 * Özel üretilmiş char[32] tipinde bir string.
	 *
	 * @var string
	 */
	public $hash;

	public function __construct($hash)
	{
		$this->hash = $hash;
	}
}