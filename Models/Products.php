<?php
require_once __DIR__ . "/Categories.php";
class Products
{
    public $image;
    public $title;
    public $category;
    public $price;


    // public $icon;

    public function __construct(string $image, String $title, Categories $category, String $price)
    {

        $this->image = $image;
        $this->title = $title;
        $this->category = $category;
        $this->price = $price;
    }

    public function getDetails()
    {
        return "Nome: {$this->title}, Categoria: {$this->category?->category}, Prezzo: {$this->price}";
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function getCategory()
    {
        return $this->category?->category;
    }
}
