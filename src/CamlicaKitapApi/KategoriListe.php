<?php namespace CamlicaKitapApi;

use CamlicaKitapApi\Model\Cevap\Kategori\ListeCevap;
use CamlicaKitapApi\Model\Istek\Kategori\ListeIstek;
use Exception;
use Httpful\Request;
use Httpful\Response;

class KategoriListe
{
	/**
	 * @param ListeIstek $listeIstek
	 *
	 * @return ListeCevap;
	 * @throws Exception
	 */
	public static function get($listeIstek)
	{
		/** @var Response $sonuc */
		$sonuc = Request::post('http://www.camlicakitap.com/api/v2/kategori/liste', $listeIstek->getArray())
			->sendsType('form')
			->expectsType('json')
			->send();

		// yeni bir cevap oluşturalım
		$listeCevap = new ListeCevap($sonuc->body->sonuc);

		// sonucu kontrol edelim
		if ($listeCevap->sonuc == 0) {

			// mesajı set edelim
			$listeCevap->mesaj = $sonuc->body->mesaj;
		} else {

			// kayıtları set edelim
			$listeCevap->setKayitlar($sonuc->body->kayitlar);
		}

		// cevabı geri dönelim
		return $listeCevap;
	}
}