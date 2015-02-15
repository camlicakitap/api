<?php namespace CamlicaKitapApi;

use CamlicaKitapApi\Model\Cevap\Kitap\YeniEklenenlerCevap;
use CamlicaKitapApi\Model\Istek\Kitap\YeniEklenenlerIstek;
use Httpful\Request;
use Httpful\Response;

class KitapYeniEklenenler
{
	/**
	 * @param YeniEklenenlerIstek $istek
	 *
	 * @return YeniEklenenlerCevap;
	 */
	public static function get($istek)
	{
		/** @var Response $sonuc */
		$sonuc = Request::post('http://www.camlicakitap.com/api/v2/kitap/yeni_eklenenler', $istek->getArray())
			->sendsType('form')
			->expectsType('json')
			->send();

		// yeni bir cevap oluşturalım
		$cevap = new YeniEklenenlerCevap($sonuc->body->sonuc);

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