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

		if ($sonuc->body->sonuc == 0)
			throw new Exception($sonuc->body->mesaj);

		// kayıtları set edelim
		return new ListeCevap($sonuc->body->kayitlar);
	}
}