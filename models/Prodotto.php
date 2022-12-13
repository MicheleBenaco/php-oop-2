<?php

class Prodotto
{
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