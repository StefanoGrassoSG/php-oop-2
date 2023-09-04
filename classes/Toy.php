<?php
require_once __DIR__ . '/Product.php';

class Toy {

    public $material;
    public $dimension;
    public $color;

    public function __construct($material, $dimension, $color)
    {
        $this->material = $material;
        $this->dimension = $dimension;
        $this->color = $color;
    }
}