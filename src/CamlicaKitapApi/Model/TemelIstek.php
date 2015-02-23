<?php namespace CamlicaKitapApi\Model;

class TemelIstek
{
	/**
	 * Özel üretilmiş char[32] tipinde bir string.
	 *
	 * @var string
	 */
	public $hash;

	public $q;
	public $kitapId;
	public $yazarId;

	/**
	 * İstenen yayınevlerinin id bilgilerinini , ile ayrılmış hali. Boş geçilirse yayınevinden bağımsız çalışır.
	 *
	 * @var string
	 */
	private $yayineviIds;
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
			'q' => $this->q,
			'kitap_id' => $this->kitapId,
			'yazar_id' => $this->yazarId,
			'yayinevi_ids' => $this->getYayineviIdsAsString(),
			'kategori_id' => $this->kategoriId,
			'siralama_key' => $this->siralamaKey,
			'siralama_value' => $this->siralamaValue,
			'baslangic' => $this->baslangic,
			'adet' => $this->adet,
		];
	}

	public function ekleYayineviId($yayineviId)
	{
		// yeni yayınevini ekleyelim
		$this->yayineviIds[] = intval(trim($yayineviId));

		// mükerrerleri temizleyelim
		$this->yayineviIds = array_unique($this->yayineviIds);
	}

	private function getYayineviIdsAsString()
	{
		return implode(',', $this->yayineviIds);
	}
}