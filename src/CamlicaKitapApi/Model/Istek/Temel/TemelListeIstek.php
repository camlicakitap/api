<?php namespace CamlicaKitapApi\Model\Istek\Temel;

class TemelListeIstek extends TemelIstek
{
	public $yazarId;
	public $kategoriId;
	public $siralamaKey;
	public $siralamaValue = 'asc';
	public $baslangic = 0;
	public $adet = 100;

	public function getArray()
	{
		return array_merge(parent::getArray(), [
			'yazar_id' => $this->yazarId,
			'kategori_id' => $this->kategoriId,
			'siralama_key' => $this->siralamaKey,
			'siralama_value' => $this->siralamaValue,
			'baslangic' => $this->baslangic,
			'adet' => $this->adet,
		]);
	}
}