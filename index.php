<?php

require __DIR__ . '/models/Product.php';
require __DIR__ . '/models/product_types/Food.php';
require __DIR__ . '/models/product_types/Game.php';
require __DIR__ . '/models/product_types/Kennel.php';

$ciboCane = new Food('Coccantini', 'cani', 'https://www.modacani.it/prodotti/big/1716.jpg', '2 kg', 'Cibo');
$ciboCane->setPrice(15);
//var_dump($ciboCane->getPrice());

$ciboGatto = new Food('Coccantini', 'gatti', 'https://shop-cdn-m.mediazs.com/bilder/natural/trainer/sterilised/con/salmone/crocchette/per/gatti/8/400/icon_topseller_1_2021_12_28t123453_772_8.jpg', '3 kg', 'Cibo');
$ciboGatto->setPrice(17);
//var_dump($ciboGatto->getPrice());
$prodotti = [$ciboCane, $ciboGatto,];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <section class="products">
        <div class="container">
            <div class="row">
                <?php foreach ($prodotti as $prodotto) : ?>
                    <div class="col">
                        <div class="card">
                            <img class="card-img-top" src="<?php echo $prodotto->getImg() ?>" alt="<?php echo $prodotto->$name ?>">
                            <div class="card-body">
                                <h3><?php echo $prodotto->$name ?></h3>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</body>

</html>