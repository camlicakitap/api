<?php

require_once '../../vendor/autoload.php';

error_reporting(E_ALL);

// hash bilgisini buraya yazınız.
$hash = '';

$istek = new \CamlicaKitapApi\Model\Istek\Kitap\YeniEklenenlerIstek($hash);

try {

	$cevap =  \CamlicaKitapApi\KitapYeniEklenenler::get($istek);

	echo '<pre>';
	print_r($cevap);
	echo '</pre>';

} catch (Exception $ex) {

	die('hata: ' . $ex->getMessage());
}
