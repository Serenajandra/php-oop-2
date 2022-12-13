<?
require_once __DIR__ . "/Products.php";

class Kennels extends Products
{
    public $size;
    public $madeOf;

    public function __construct(string $image, String $title, Categories $category, float $price, string $size, string $madeOf)
    {
        parent::__construct($image, $title, $category, $price);
        $this->size = $size;
        $this->madeOf = $madeOf;
    }
}
