<?php 
require_once __DIR__ . '/../classes/Product.php';
require_once __DIR__ . '/../classes/categories.php';

$categories = new  Categories(
    'dog',
    'fa-solid fa-dog fa-2x'
);

$foodsArray = [];

try {
    $dogFood = new Food(
        'Vigor Dog',
        'lorem ipsum dolor',
        29,
        'https://arcaplanet.vtexassets.com/arquivos/ids/257857-200-200/stuzzy-monoprotein-agnello-.jpg?v=1780234098',
        $categories,
        true,
        'humid',
        250,
        'chicken'
    );
    $dogFood2 = new Food(
        'Stuzzy Dog',
        'lorem ipsum dolor',
        12,
        'https://arcaplanet.vtexassets.com/arquivos/ids/266207-200-200/virtus-dog-protein-selection-anatra-400g.jpg?v=1780236292',
        $categories,
        true,
        'dry',
        500,
        'beef'
    );
    $dogFood3 = new Food(
        'Natural Trainer',
        'lorem ipsum dolor',
        -19,
        'https://arcaplanet.vtexassets.com/arquivos/ids/280402-200-200/expecial-cane-bocconcini-pollo-e-anatra.jpg?v=1780228938',
        $categories,
        true,
        'dry',
        300,
        'fish'
    );
    $foodsArray = [
        $dogFood,
        $dogFood2,
        $dogFood3
    ]
;
}
catch (Exception $err) {

}

header('Content-Type: application/json');
echo json_encode($foodsArray);