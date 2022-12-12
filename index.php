<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . "/Models/Products.php";
require_once __DIR__ . "/Models/Categories.php";
require_once __DIR__ . "/Models/Food.php";
require_once __DIR__ . "/Models/Kennels.php";
require_once __DIR__ . "/Models/Toys.php";
require_once __DIR__ . "/Database/database.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <header>
        <h1 class="text-center m-3">Pet Shop</h1>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <?php foreach ($Products as $product) { ?>
                    <div class="col">
                        <div class="card">
                            <img src="<?php echo $product->image; ?>">
                            <div class="card-body"> -->
                                <h2><?php echo $product->getTitle(); ?></h2>
                                <p class="card-text">
                                    <?php echo $product->getPrice() ?> minutes
                                </p>
                                <p class="card-text">
                                    Categoria: <?php echo $product->getCategory(); ?>
                                </p>
                            </div> -->
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </main>
    <footer>
        <p class="text-center">Made with love by Serena</p>
    </footer>
</body>

</html>