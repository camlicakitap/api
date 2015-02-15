<?php namespace CamlicaKitapApi\Model\Istek\Temel;

class GenelIstek
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

	public function getArray()
	{
		return [
			'hash' => $this->hash
		];
	}
}