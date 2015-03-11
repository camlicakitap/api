<?php

require_once '../../vendor/autoload.php';

use CamlicaKitapApi\Model\TemelIstek;
use CamlicaKitapApi\YazarBilgi;

error_reporting(E_ALL);

// hash bilgisini buraya yazınız.
$hash = '';

$istek = new TemelIstek($hash);

try {

	$cevap =  YazarBilgi::get($istek);

	echo '<pre>';
	print_r($cevap);
	echo '</pre>';

} catch (Exception $ex) {

	die('hata: ' . $ex->getMessage());
}
