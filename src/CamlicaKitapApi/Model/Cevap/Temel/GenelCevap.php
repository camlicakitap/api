<?php namespace CamlicaKitapApi\Model\Cevap\Temel;

/**
 * Created by PhpStorm.
 * User: irfan
 * Date: 11/2/14
 * Time: 11:53 AM
 */
abstract class GenelCevap
{
	/**
	 * 1 ise işlem başarılı demektir.
	 * 0 ise işlem başarısız demektir. Bu durumda mesaj içeriğinde hata bilgisi yer alır.
	 *
	 * @var int
	 */
	public $sonuc;
	public $mesaj;

	public function __construct($sonuc)
	{
		$this->sonuc = $sonuc;
	}

	/**
	 * Sonuç başarılı ise true değilse false.
	 *
	 * @return bool
	 */
	public function isSonucBasarili()
	{
		return $this->sonuc == 1;
	}
}