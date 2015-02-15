<?php

require_once '../../vendor/autoload.php';

error_reporting(E_ALL);

use CamlicaKitapApi\KategoriListe;
use CamlicaKitapApi\Model\Istek\Kategori\ListeIstek;

// hash bilgisini buraya yazınız.
$hash = '';

$listeIstek = new ListeIstek($hash);

try {

	$listeCevap = KategoriListe::get($listeIstek);

	echo '<pre>';
	print_r($listeCevap);
	echo '</pre>';

} catch (Exception $ex) {

	die('hata: ' . $ex->getMessage());
}
