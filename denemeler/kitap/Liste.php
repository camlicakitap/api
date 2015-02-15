<?php

require_once '../../vendor/autoload.php';

use CamlicaKitapApi\KitapListe;
use CamlicaKitapApi\Model\Istek\Temel\TemelListeIstek;

error_reporting(E_ALL);

// hash bilgisini buraya yazınız.
$hash = '';

$istek = new TemelListeIstek($hash);

$istek->adet = 10;

try {

	$cevap =  KitapListe::get($istek);

	echo '<pre>';
	print_r($cevap);
	echo '</pre>';

} catch (Exception $ex) {

	die('hata: ' . $ex->getMessage());
}
