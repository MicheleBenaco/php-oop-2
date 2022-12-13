<?php
require_once __DIR__ . '/Prodotto.php';

class Gioco extends Prodotto{
    public $tipo;
    public $descrizione;

    function __construct(String $_nome, String $_poster, Categoria $_categoria, Float $_prezzo, String $_descrizione, String $_tipo )
    {
        parent::__construct($_nome, $_poster, $_categoria, $_prezzo);
        $this->tipo = $_tipo;
        $this->descrizione = $_descrizione;
    }
}