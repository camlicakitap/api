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
		$sonuc = Request::post('https://www.camlicakitap.com/api/v2/kategori/liste', $istek->getArray())
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