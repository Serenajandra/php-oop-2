<?php
require_once __DIR__ . "/../Models/Products.php";
require_once __DIR__ . "/../Models/Categories.php";
require_once __DIR__ . "/../Models/Food.php";
require_once __DIR__ . "/../Models/Kennels.php";
require_once __DIR__ . "/../Models/Toys.php";


$croquettes = new Food("https://th.bing.com/th/id/OIP.gkl1iRo5rHIoVOnnq6cJOwHaHa?pid=ImgDet&rs=1", "Crocchette di pollo", new Categories("cani"), "11.00 euro/kg", "carne di pollo, amido di mais, eccipienti", "12/2025", "cibo secco");
// echo $croquettes->getDetails();

$chickenPate = new Food("https://fera24.it/images/thumbnails/405/512/detailed/88/8009470013062F1.jpg", "Paté di pollo", new Categories("gatti"), "14.00 euro/kg", "pollo tritato, aromi naturali, sale , amido", "09/2024", "cibo umido");
// echo $chickenPate->getDetails();


$kennelSmall = new Kennels("https://th.bing.com/th/id/OIP.JNr4plRO3P5W_f72zl8irAHCHC?pid=ImgDet&rs=1", "cuccia small", new Categories("gatti"), "12.90 euro", "small", "plastica");

$KennelXxl = new Kennels("https://th.bing.com/th/id/R.fa48cf3efb9f377d829552192923cdc9?rik=scTj%2bmxNMbLFhA&pid=ImgRaw&r=0", "cuccia XXL", new Categories("cani"), "25.00 euro", "xxl", "plastica");

$Ball = new Toys("https://images-na.ssl-images-amazon.com/images/I/61p51rFCLdL._AC_SX522_.jpg", "Pallina rimbalzante", new Categories("gatti"), "5.00 euro", "gioco di intrattenimento", "plastica e metallo");

$frisbee = new Toys("https://static.zoomalia.com/prod_img/37717/lm_3175b8add2a5d98b1a652ea7fd72d942dac1507283033.jpg", "frisbee", new Categories("cani"), "10.00 euro", "gioco per addestramento", "plastica");

$Products = [
    $croquettes,
    $chickenPate,
    $kennelSmall,
    $KennelXxl,
    $Ball,
    $frisbee
];
