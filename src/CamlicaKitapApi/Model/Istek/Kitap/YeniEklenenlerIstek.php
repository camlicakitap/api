<?php namespace CamlicaKitapApi\Model\Istek\Kitap;

use CamlicaKitapApi\Model\Istek\Temel\GenelIstek;

class YeniEklenenlerIstek extends GenelIstek
{
	public function getArray()
	{
		return [
			'hash' => $this->hash
		];
	}
}