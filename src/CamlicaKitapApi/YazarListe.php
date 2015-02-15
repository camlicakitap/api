<?php namespace CamlicaKitapApi;

use CamlicaKitapApi\Model\Cevap\Yazar\ListeCevap;
use CamlicaKitapApi\Model\Istek\Temel\TemelListeIstek;
use Httpful\Request;
use Httpful\Response;

class YazarListe
{
	/**
	 * @param TemelListeIstek $istek
	 *
	 * @return ListeCevap
	 */
	public static function get($istek)
	{
		/** @var Response $sonuc */
		$sonuc = Request::post('http://www.camlicakitap.com/api/v2/yazar/liste', $istek->getArray())
			->sendsType('form')
			->expectsType('json')
			->send();

		// yeni bir cevap oluşturalım
		$cevap = new ListeCevap($sonuc->body->sonuc);

		// sonucu kontrol edelim
		if ($cevap->isSonucBasarili()) {

			// kayıtları set edelim
			$cevap->setKayitlar($sonuc->body->kayitlar);
		} else {

			// mesajı set edelim
			$cevap->mesaj = $sonuc->body->mesaj;
		}

		// cevabı geri dönelim
		return $cevap;
	}
}