<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . "/Models/Products.php";
require_once __DIR__ . "/Models/Categories.php";

// $categories = [
//     new categories("cani"),
//     new categories("gatti")
// ];



$croquettes = new Products("Crocchette di pollo", new Categories("cani"), "11.00 euro/kg");

echo $croquettes->getDetails();

// Products
// figli:
// public $food;     // chicken pate for dogs
// public $toys;     // ball
// public $kennels;  // kennel
