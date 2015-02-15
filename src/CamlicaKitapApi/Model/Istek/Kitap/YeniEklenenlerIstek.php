<?php namespace CamlicaKitapApi\Model\Istek\Kitap;

use CamlicaKitapApi\Model\Istek\Temel\GenelIstek;

class YeniEklenenlerIstek extends GenelIstek
{
	// kaç adet sonuç dönecek
	public $adet;

	public function getArray()
	{
		return [
			'hash' => $this->hash,
			'adet' => $this->adet
		];
	}
}