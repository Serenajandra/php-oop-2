<?php

class Products
{
    public $title;
    public $category;
    public $price;


    // public $icon;

    public function __construct(String $title, Categories $category, String $price)
    {
        $this->title = $title;
        $this->categoria = $category;
        $this->price = $price;
    }

    public function getDetails()
    {
        return "Nome: {$this->title}, Categoria: {$this->categoria}, Prezzo: {$this->price}";
    }
}
