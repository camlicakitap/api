<?php namespace CamlicaKitapApi;

use CamlicaKitapApi\Model\Cevap\Temel\TemelBilgiCevap;
use CamlicaKitapApi\Model\TemelIstek;
use Httpful\Request;
use Httpful\Response;

class YazarBilgi
{
	/**
	 * @param TemelIstek $istek
	 *
	 * @return TemelBilgiCevap;
	 */
	public static function get($istek)
	{
		/** @var Response $sonuc */
		$sonuc = Request::post('http://www.camlicakitap.com/api/v2/yazar/bilgi', $istek->getArray())
			->sendsType('form')
			->expectsType('json')
			->send();

		// yeni bir cevap oluşturalım
		$cevap = new TemelBilgiCevap($sonuc->body->sonuc);

		// sonucu kontrol edelim
		if ($cevap->isSonucBasarili()) {

			// kayıtları set edelim
			$cevap->setBilgi($sonuc->body->bilgi);
		} else {

			// mesajı set edelim
			$cevap->mesaj = $sonuc->body->mesaj;
		}

		// cevabı geri dönelim
		return $cevap;
	}
}