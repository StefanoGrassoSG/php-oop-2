<?php
require_once __DIR__ . '/../classes/Product.php';
require_once __DIR__ . '/../classes/dog.php';
require_once __DIR__ . '/../classes/cat.php';

$product = new Product();
var_dump($product);

$dog = new Dog();
var_dump($dog);

$cat = new Cat();
var_dump($cat);
