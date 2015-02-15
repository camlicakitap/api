<?php namespace CamlicaKitapApi\Model\Istek\Temel;

class TemelListeIstek extends TemelIstek
{
	public $siralamaKey;
	public $siralamaValue = 'asc';
	public $baslangic = 0;
	public $adet = 100;

	public function getArray()
	{
		return array_merge(parent::getArray(), [
			'siralama_key' => $this->siralamaKey,
			'siralama_value' => $this->siralamaValue,
			'abaslangicdet' => $this->baslangic,
			'adet' => $this->adet,
		]);
	}
}