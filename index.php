<?php
require __DIR__ .  "/classes/Product.php";
require __DIR__ .  "/classes/User.php";
require __DIR__ .  "/classes/Premium.php";
require __DIR__ .  "/classes/CreditCard.php";

// users
$roberto = new User("Roberto", "Villani", "robertovillani58@gmail.com", "5342128965437898");

$samuele = new Premium("Samuele", "Madrigali", "samuele.madrigali@gmail.com", "4023489764567213");

// product
$pc = new Product("Macbook Air M1", "Chip Apple M1, Display Retina LED da 13,3 pollici, 8GB di memoria ram unificata, Unità SSD da 512GB, MacOs Monterey", 1200);

$smartphone = new Product("Xiaomi Mi10 Pro", "Snapdragon 865, Adreno 650, 8 GB ram, 256 GB storage, Display 6,67 pollici Amoled", 450);


$roberto->addToCart($pc);
$roberto->addToCart($smartphone);

var_dump($roberto->getCart());


$samuele->addToCart($pc);

var_dump($samuele->getCart());
