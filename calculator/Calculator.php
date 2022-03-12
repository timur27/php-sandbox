<?php

namespace app\service;
require 'vendor/autoload.php';
require "Product.php";
require "ShoppingCard.php";

use app\domain\Product;
use app\domain\ShoppingCard;

$shoppingCard = new ShoppingCard();
$shoppingCard->addProduct(new Product(1, 10.0));
$shoppingCard->addProduct(new Product(2, 20.0));
printf($shoppingCard->calculateTotalPrice());
printf($shoppingCard->calculateTotalPrice());