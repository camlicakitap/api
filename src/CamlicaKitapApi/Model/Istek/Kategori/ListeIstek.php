<?php namespace CamlicaKitapApi\Model\Istek\Kategori;

use CamlicaKitapApi\Model\Istek\Temel\GenelIstek;

/**
 * Created by PhpStorm.
 * User: irfan
 * Date: 11/2/14
 * Time: 11:47 AM
 */

class ListeIstek extends GenelIstek
{
	public function getArray()
	{
		return [
			'hash' => $this->hash
		];
	}
}