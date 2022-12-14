<?php
require_once __DIR__ . '/traits/Peso.php';
class Prodotto
{
    use Peso;
    public $nome;
    public $poster;
    public $categoria;
    public $prezzo;


function __construct(String $_nome, String $_poster, Categoria $_categoria, Float $_prezzo)
    {
        $this->nome = $_nome;
        $this->poster = $_poster;
        $this->categoria = $_categoria;
        $this->prezzo = $_prezzo;
    }
}