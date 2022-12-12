<?php

require __DIR__ . '/models/Product.php';
require __DIR__ . '/models/product_types/Food.php';
require __DIR__ . '/models/product_types/Game.php';
require __DIR__ . '/models/product_types/Kennel.php';

$ciboCane = new Food('Coccantini', 'cani', 'https://www.modacani.it/prodotti/big/1716.jpg', '2 kg', 'Cibo', 15.99);

$giocoCane = new Game('Peluche', 'cani', 'https://www.pacopetshop.it/11414-large_default/m-pets-rune-eco-gioco-riciclato-peluches-per-cani.jpg', '300g', 'gioco', 13.49);

$cucciaCane = new Kennel('Cuccia Da Esterno', 'cani', 'https://cdn.produceshop.it/26748-large_default/cuccia-per-cani-taglia-media-in-plastica-esterno-interno-bella.jpg', '7kg', 'cuccia', 79.95);

$ciboGatto = new Food('Coccantini', 'gatti', 'https://shop-cdn-m.mediazs.com/bilder/natural/trainer/sterilised/con/salmone/crocchette/per/gatti/8/400/icon_topseller_1_2021_12_28t123453_772_8.jpg', '3 kg', 'Cibo', 17.49);

$giocoGatto = new Game('Cannetta', 'gatti', 'https://shop-cdn-m.mediazs.com/bilder/cannetta/gioco/con/boa/5/400/58521_PLA_Katzenangel_Federboa_FG_DSC0755_5.jpg', '100g', 'gioco', 3.99);

$cucciaGatto = new Kennel('Cuscino', 'gatti', 'https://cloud79.smasproductos.com/42117791-high/1617137704-letti-per-gatti-letto-rotondo-per-gatti-casa-morbida-il-miglior-letto-per-cani-cuscino-per-cuccioli-e-cestino-per-linverno.jpg', '500g', 'cuccia', 36.99);

$prodotti = [$ciboCane, $giocoCane, $cucciaCane, $ciboGatto, $giocoGatto, $cucciaGatto];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <section class="products my-5">
        <div class="container">
            <h1 class="text-center my-5">Shop Online</h1>
            <div class="row row-cols-3 g-4">
                <?php foreach ($prodotti as $prodotto) : ?>
                    <div class="col">
                        <div class="card">
                            <img class="card-img-top" src="<?php echo $prodotto->getImg() ?>" alt="<?php echo $prodotto->name ?>">
                            <div class="card-body">
                                <ul class="list-unstyled">
                                    <li>
                                        <h3><?php echo $prodotto->name ?></h3>
                                    </li>
                                    <li>
                                        <strong>Categoria:</strong>
                                        <?php if ($prodotto->category == 'gatti') : ?>
                                            <i class="fa-solid fa-cat"></i>
                                        <?php elseif ($prodotto->category == 'cani') : ?>
                                            <i class="fa-solid fa-dog"></i>
                                        <?php endif; ?>
                                    </li>
                                    <li><strong>Prezzo:</strong> <?= $prodotto->getPrice() ?></li>
                                    <li>
                                        <strong>Tipo di articolo:</strong> <?= $prodotto->getType() ?>
                                    </li>
                                    <li><strong>Peso:</strong> <?php echo $prodotto->getWeight() ?></li>
                                </ul>

                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</body>

</html>