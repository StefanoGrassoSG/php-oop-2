<?php
require_once __DIR__ . '/Product.php';

class Food extends Product {

    public $type;
    public $weight;
    public $taste;

    public function __construct($name, $description, $price, $img, $category, $avaiable, $type, $weight, $taste)
    {   parent::__construct($name, $description, $price, $img, $category, $avaiable);

        $this->type = $type;
        $this->weight = $weight;
        $this->taste = $taste;
    }
}