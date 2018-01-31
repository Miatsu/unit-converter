<?php

function pre(array $array) {
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

pre($_GET);

// $current_volume_to_convert = null;
// if (isset($_GET['volume_to_convert'])) {
//     $current_volume_to_convert = $_GET['volume_to_convert'];
// }

$current_volume_to_convert = isset($_GET['volume_to_convert']) ? $_GET['volume_to_convert'] : null;
$current_volume_unit_to_convert = isset($_GET['volume_unit_to_convert']) ? $_GET['volume_unit_to_convert'] : null;
$current_volume_unit_converted = isset($_GET['volume_unit_converted']) ? $_GET['volume_unit_converted'] : null;

$volume_units = ['ml', 'cl', 'dl', 'l'];


require 'templates/index.template.php';
