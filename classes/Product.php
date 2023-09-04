<?php

require_once __DIR__ . '/Food.php';
require_once __DIR__ . '/Bed.php';
require_once __DIR__ . '/Toy.php';

class Product {

    public $name;
    public $description;
    public $price;
    public $img;
    public $category;
    public $avaiable;

    public function __construct($name, $description, $price, $img, $category, $avaiable)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->img = $img;
        $this->category = $category;
        $this->avaiable = $avaiable;
    }
}