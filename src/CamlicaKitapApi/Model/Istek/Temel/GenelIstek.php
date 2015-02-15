<?php namespace CamlicaKitapApi\Model\Istek\Temel;

/**
 * Created by PhpStorm.
 * User: irfan
 * Date: 11/2/14
 * Time: 11:46 AM
 */
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