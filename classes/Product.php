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

    public function __construct(string $name, $description, float $price, $img, Categories $category, bool $avaiable)
    {
        $this->name = $name;
        $this->description = $description;
        if(is_numeric($price) && $price > 0) {
            $this->price = $price;
        }
        else {
            throw new InvalidArgumentException('valore prezzo non valido');
        }
        $this->img = $img;
        $this->category = $category;
        $this->avaiable = $avaiable;
    }
}