<?php namespace CamlicaKitapApi;

use CamlicaKitapApi\Model\Cevap\Kategori\ListeCevap;
use CamlicaKitapApi\Model\TemelIstek;
use Httpful\Request;
use Httpful\Response;

class KategoriListe
{
	/**
	 * @param TemelIstek $istek
	 *
	 * @return ListeCevap;
	 */
	public static function get($istek)
	{
		/** @var Response $sonuc */
		$sonuc = Request::post('http://www.camlicakitap.com/api/v2/kategori/liste', $istek->getArray())
			->sendsType('form')
			->expectsType('json')
			->send();

		// yeni bir cevap oluşturalım
		$cevap = new ListeCevap($sonuc->body->sonuc);

		// sonucu kontrol edelim
		if ($cevap->sonuc == 0) {

			// mesajı set edelim
			$cevap->mesaj = $sonuc->body->mesaj;
		} else {

			// kayıtları set edelim
			$cevap->setKayitlar($sonuc->body->kayitlar);
		}

		// cevabı geri dönelim
		return $cevap;
	}
}