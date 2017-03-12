<?php namespace CamlicaKitapApi\Model;

class Yayinevi
{
    public $id;
    public $adi;
    public $radi;

    /**
     * @param object $kayit
     */
    public function __construct($kayit)
    {
        $this->id = $kayit->id;
        $this->adi = $kayit->adi;
        $this->radi = $kayit->radi;
    }
}
