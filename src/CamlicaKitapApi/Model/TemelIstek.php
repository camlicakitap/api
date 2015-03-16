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
	 * İstenen yayınevlerinin id bilgileri. Boş geçilirse yayınevinden bağımsız çalışır.
	 *
	 * @var array
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
		$this->yayineviIds = [];
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

	/**
	 * yayinevi_ids parametresine yeni yayınevi ekler
	 *
	 * @param int $yayineviId
	 */
	public function ekleYayineviId($yayineviId)
	{
		// yeni yayınevini ekleyelim
		$this->yayineviIds[] = intval(trim($yayineviId));

		// mükerrerleri temizleyelim
		$this->yayineviIds = array_unique($this->yayineviIds);
	}

	/**
	 * @param array $yayineviIds
	 */
	public function addYayineviIds(array $yayineviIds = [])
	{
		// yayın evi ids üzerinde dönelim
		foreach ($yayineviIds as $yayineviId) {

			// aktif yayınevini ekleyelim
			self::ekleYayineviId($yayineviId);
		}
	}

	private function getYayineviIdsAsString()
	{
		return implode(',', $this->yayineviIds);
	}

	/**
	 * kategori_id parametresini set eder.
	 *
	 * @param int $kategoriId
	 */
	public function setKategoriId($kategoriId)
	{
		$this->kategoriId = (int) $kategoriId;
	}

	/**
	 * kitap_id parametresini set eder
	 *
	 * @param int $kitapId
	 */
	public function setKitapId($kitapId)
	{
		$this->kitapId = (int) $kitapId;
	}

	/**
	 * yazar_id parametresini set eder
	 *
	 * @param int $yazarId
	 */
	public function setYazarId($yazarId)
	{
		$this->yazarId = (int) $yazarId;
	}
}