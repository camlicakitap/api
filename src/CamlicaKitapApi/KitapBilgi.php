<?php namespace CamlicaKitapApi;

use CamlicaKitapApi\Model\Cevap\Kitap\BilgiCevap;
use CamlicaKitapApi\Model\Istek\Temel\TemelIstek;
use Httpful\Request;
use Httpful\Response;

class KitapBilgi
{
	/**
	 * @param TemelIstek $istek
	 *
	 * @return BilgiCevap;
	 */
	public static function get($istek)
	{
		/** @var Response $sonuc */
		$sonuc = Request::post('http://www.camlicakitap.com/api/v2/kitap/bilgi/toplam_adet', $istek->getArray())
			->sendsType('form')
			->expectsType('json')
			->send();

		// yeni bir cevap oluşturalım
		$cevap = new BilgiCevap($sonuc->body->sonuc);

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