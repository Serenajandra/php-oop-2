<?php
require_once __DIR__ . "/Products.php";
class Toys extends Products
{
    public $type;
    public $madeof;
    // public $balls;
    // public $forTeeths;
    // public $training;

    public function __construct(string $image, String $title, Categories $category, String $price, string $type, string $madeOf)
    {
        parent::__construct($image, $title, $category, $price);
        $this->type = $type;
        $this->madeOf = $madeOf;
    }
}
