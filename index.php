<?php 

require_once __DIR__ . '/vendor/autoload.php';

use prositedeveloper\Weather\Weather;

$weather = new Weather('f53dbf2f561e47b7824143134242606');

$c = $weather
    ->location('Krasnodar')
    ->get()
    ->getCelsius();

dd(
    $c
);