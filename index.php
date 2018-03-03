<?php

require_once 'vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader);

function pre(array $array) {
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

function convert_volume($volume_to_convert, $unit_to_convert, $unit_converted, array $volume_units) {
    $coeff = $volume_units[$unit_to_convert] / $volume_units[$unit_converted];
    return $coeff * $volume_to_convert;
}

pre($_GET);

$current_volume_to_convert = (int) (isset($_GET['volume_to_convert']) ? $_GET['volume_to_convert'] : null);
$current_volume_unit_to_convert = isset($_GET['volume_unit_to_convert']) ? $_GET['volume_unit_to_convert'] : null;
$current_volume_unit_converted = isset($_GET['volume_unit_converted']) ? $_GET['volume_unit_converted'] : null;

$volume_units = ['ml' => 0.001, 'cl' => 0.01, 'dl' => 0.1, 'l' => 1];

if ($current_volume_to_convert !== null && $current_volume_unit_to_convert !== null && $current_volume_unit_converted !== null) {
    $volume_converted = convert_volume(
        $current_volume_to_convert,
        $current_volume_unit_to_convert,
        $current_volume_unit_converted,
        $volume_units
    );
} else {
    $volume_converted = 0;
}

echo $twig->render('index.twig', [
    'current_volume_to_convert' => $current_volume_to_convert,
    'current_volume_unit_to_convert' => $current_volume_unit_to_convert,
    'current_volume_unit_converted' => $current_volume_unit_converted,
    'volume_units' => $volume_units,
    'volume_converted' => $volume_converted,
]);
