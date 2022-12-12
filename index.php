<?php
require_once __DIR__ . "/Models/Products.php";
require_once __DIR__ . "/Models/Categories.php";


$croquettes = new Products("Crocchette di pollo", $category, "11.00 euro/kg");

echo $croquettes->getDetails();

// Products
// figli:
// public $food;     // chicken pate for dogs
// public $toys;     // ball
// public $kennels;  // kennel
