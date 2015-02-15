<?php

require_once '../../vendor/autoload.php';

use CamlicaKitapApi\KitapBilgi;
use CamlicaKitapApi\Model\Istek\Temel\TemelIstek;

error_reporting(E_ALL);

// hash bilgisini buraya yazınız.
$hash = '';

$istek = new TemelIstek($hash);

try {

	$cevap =  KitapBilgi::get($istek);

	echo '<pre>';
	print_r($cevap);
	echo '</pre>';

} catch (Exception $ex) {

	die('hata: ' . $ex->getMessage());
}
