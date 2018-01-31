<?php

function pre(array $array) {
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

function get_product_total_quantity(array $products) {
    $total_quantity = 0;
    foreach ($products as $product) {
        $total_quantity = $total_quantity + $product['quantity'];
    }
    return $total_quantity;
}

$fruits = [
    'title' => 'Fruits',
    'products' => [
        ['name' => 'Banane', 'quantity' => 5],
        ['name' => 'Pomme', 'quantity' => 10],
        ['name' => 'Tomate', 'quantity' => 3],
    ],
];

$shopping_list = [
    $fruits,
    [
        'title' => 'Légumes',
        'products' => [
            ['name' => 'Asperge', 'quantity' => 5],
            ['name' => 'Brocolis', 'quantity' => 50],
        ],
    ],
];

require 'templates/page.php';
