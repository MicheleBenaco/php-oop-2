<?php
require_once __DIR__ . "/Prodotto.php";

class Cuccia extends Prodotto
{
    public $tipo;
    public $colore;
    public $dimensioni;

    /**
     * Description
     * @param {String} $colore -> colore cuccia
     * @param {Int} $dimensioni -> dimensioni cuccia
     * @author Chiara 
     **/
    function __construct(String $_nome, String $_poster, Categoria $_categoria, Float $_prezzo, String $_colore, Int $_dimensioni, String $_tipo)
    {
        parent::__construct($_nome, $_poster, $_categoria, $_prezzo);
        $this->tipo = $_tipo;
        $this->colore = $_colore;
        $this->dimensioni = $_dimensioni;
    }
}