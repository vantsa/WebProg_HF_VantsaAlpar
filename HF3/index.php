<?php

include "loader.php";

$product1 = new Product(1, "iPhone 14", 6400, 10);
$product2 = new Product(2, "Xiaomi Air Fryer", 400, 52);
$product3 = new Product(1, "MacBook Pro", 8100, 4);

$cart = new Cart();
$cartItem1 = $cart ->addProduct($product1, 1);
$cartItem2 = $cart ->addProduct($product1, 1);
echo "Number of items in cart: " .$cart->getTotalQuantity();
echo "Total price of items in cart: " .$cart->getTotalSum();

$cartItem1->increaseQuantity();
$cartItem2->increaseQuantity();

echo "Number of items in cart: " .$cart->getTotalQuantity();
echo "Total price of items in cart: " .$cart->getTotalSum();

$cart->removeProduct($product1);

echo "Number of items in cart: " .$cart->getTotalQuantity();
echo "Total price of items in cart: " .$cart->getTotalSum();