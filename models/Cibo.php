<?php
require_once __DIR__ . '/Prodotto.php';

class Cibo extends Prodotto
{
    public $tipo;
    public $peso;
    public $data;
    public $eta;
    public $gusto;

    function __construct(string $_nome, string $_poster, Categoria $_categoria, float $_prezzo, string $_tipo, float $_peso, string $_data, string $_eta, string $_gusto)
    {
        parent::__construct($_nome, $_poster, $_categoria, $_prezzo);
        $this->tipo = $_tipo;
        $this->tipo = $_tipo;
        $this->peso = $_peso;
        $this->data = $_data;
        $this->eta = $_eta;
        $this->gusto = $_gusto;

    }
}