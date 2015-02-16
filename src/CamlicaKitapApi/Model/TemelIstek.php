<?php namespace CamlicaKitapApi\Model;

class TemelIstek
{
	/**
	 * Özel üretilmiş char[32] tipinde bir string.
	 *
	 * @var string
	 */
	public $hash;

	public $kitapId;
	public $yazarId;
	public $kategoriId;
	public $siralamaKey;
	public $siralamaValue = 'asc';
	public $baslangic = 0;
	public $adet = 100;

	/**
	 * @param $hash
	 * @param int $baslangic
	 * @param int $adet
	 */
	public function __construct($hash, $baslangic = 0, $adet = 100)
	{
		$this->hash = $hash;
		$this->baslangic = 0;
		$this->adet = $adet;
	}

	/**
	 * @return array
	 */
	public function getArray()
	{
		return [
			'hash' => $this->hash,
			'kitap_id' => $this->kitapId,
			'yazar_id' => $this->yazarId,
			'kategori_id' => $this->kategoriId,
			'siralama_key' => $this->siralamaKey,
			'siralama_value' => $this->siralamaValue,
			'baslangic' => $this->baslangic,
			'adet' => $this->adet,
		];
	}
}