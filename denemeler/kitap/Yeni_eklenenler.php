<?php

use CamlicaKitapApi\KitapYeniEklenenler;
use CamlicaKitapApi\Model\Istek\Kitap\YeniEklenenlerIstek;

require_once '../../vendor/autoload.php';

error_reporting(E_ALL);

// hash bilgisini buraya yazınız.
$hash = '';

$istek = new YeniEklenenlerIstek($hash);

$istek->adet = 10;

try {

	$cevap =  KitapYeniEklenenler::get($istek);

	echo '<pre>';
	print_r($cevap);
	echo '</pre>';

} catch (Exception $ex) {

	die('hata: ' . $ex->getMessage());
}
