<?php
require_once __DIR__ . "/Products.php";
require_once __DIR__ . "/Categories.php";
class Food extends Products
{
    public $ingredients;
    public $expirationDate;
    public $type;

    public function __construct(string $image, String $title, Categories $category, String $price, string $ingredients, string $expirationDate, string $type)
    {
        parent::__construct($image, $title, $category, $price);
        $this->ingredients = $ingredients;
        $this->expirationDate = $expirationDate;
        $this->type = $type;
    }
}
