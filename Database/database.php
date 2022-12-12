<?php
require_once __DIR__ . "/../Models/Products.php";
// require_once __DIR__ . "/..Models/Categories.php";
// $Categories = [

// ]

$Products = [
    new Products("https://th.bing.com/th/id/OIP.gkl1iRo5rHIoVOnnq6cJOwHaHa?pid=ImgDet&rs=1", "Crocchette di pollo", new Categories("cani"), "11.00 euro/kg"),
    // echo $croquettes->getDetails();

    new Products("https://fera24.it/images/thumbnails/405/512/detailed/88/8009470013062F1.jpg", "Paté di pollo", new Categories("gatti"), "14.00 euro/kg"),
    // echo $chickenPate->getDetails();


    new Products("https://th.bing.com/th/id/OIP.JNr4plRO3P5W_f72zl8irAHCHC?pid=ImgDet&rs=1", "cuccia small", new Categories("gatti"), "12.90 euro"),

    new Products("https://th.bing.com/th/id/R.fa48cf3efb9f377d829552192923cdc9?rik=scTj%2bmxNMbLFhA&pid=ImgRaw&r=0", "cuccia XXL", new Categories("cani"), "25.00 euro"),

    new Products("https://images-na.ssl-images-amazon.com/images/I/61p51rFCLdL._AC_SX522_.jpg", "Pallina rimbalzante", new Categories("gatti"), "5.00 euro"),
    new Products("https://static.zoomalia.com/prod_img/37717/lm_3175b8add2a5d98b1a652ea7fd72d942dac1507283033.jpg", "frisbee", new Categories("cani"), "10.00 euro")
];
