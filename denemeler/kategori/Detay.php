<?php

require_once '../../vendor/autoload.php';

use CamlicaKitapApi\KategoriDetay;
use CamlicaKitapApi\Model\TemelIstek;

error_reporting(E_ALL);

// hash bilgisini buraya yazınız.
$hash = '';

$istek = new TemelIstek($hash);
$istek->setKategoriId(1);

try {

	$cevap = KategoriDetay::get($istek);

	echo '<pre>';
	print_r($cevap);
	echo '</pre>';

} catch (Exception $ex) {

	die('hata: ' . $ex->getMessage());
}
