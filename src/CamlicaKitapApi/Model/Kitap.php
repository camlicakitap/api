<?php namespace CamlicaKitapApi\Model;

class Kitap
{
    public $id;
    public $adi;
    public $radi;

    public $sayfa;
    public $stok_bilgisi;
    public $boyut;
    public $isbn;
    public $detay;
    public $resim_uzantisi;
    public $liste_fiyati;
    public $uye_fiyati;

    /**
     * @var Yayinevi
     */
    public $yayinevi;

    /**
     * @var Kategori
     */
    public $kategori;

    /**
     * @var Dil
     */
    public $dil;

    /**
     * @var Yazar[]
     */
    public $yazarlar = [];

    /**
     * @param object $kayit
     */
    public function __construct($kayit)
    {
        // temel bilgileri set edelim
        $this->id = $kayit->id;
        $this->adi = $kayit->adi;
        $this->radi = $kayit->radi;

        $this->sayfa = isset($kayit->sayfa) ? $kayit->sayfa : null;
        $this->stok_bilgisi = isset($kayit->stok_bilgisi) ? $kayit->stok_bilgisi : null;
        $this->boyut = isset($kayit->boyut) ? $kayit->boyut : null;
        $this->isbn = isset($kayit->isbn) ? $kayit->isbn : null;
        $this->detay = isset($kayit->detay) ? $kayit->detay : null;
        $this->resim_uzantisi = isset($kayit->resim_uzantisi) ? $kayit->resim_uzantisi : null;
        $this->liste_fiyati = isset($kayit->liste_fiyati) ? $kayit->liste_fiyati : null;
        $this->uye_fiyati = isset($kayit->uye_fiyati) ? $kayit->uye_fiyati : null;

        // yayınevi varsa
        if (isset($kayit->yayinevi)) {

            $this->yayinevi = new Yayinevi($kayit->yayinevi);
        }

        // kategori varsa
        if (isset($kayit->kategori)) {

            $this->kategori = new Kategori($kayit->kategori);
        }

        // dil varsa
        if (isset($kayit->dil)) {

            $this->dil = new Dil($kayit->dil);
        }

        // yazarlar varsa
        if (isset($kayit->yazarlar)) {

            // yazarlar üzerinde dönelim
            foreach ($kayit->yazarlar as $yazar) {

                $this->yazarlar[] = new Yazar($yazar);
            }
        }
    }
}
