<?php

$fromPackage = __DIR__."/../vendor/autoload.php";

if (file_exists($fromPackage)) {
    require_once $fromPackage;
} else {
    require_once "./vendor/autoload.php";
}

require_once "./constants.php";

$boottstrapers = [
    'ClassLoader',
    'DetectEnvironment',
    'ErrorHandler'
];

foreach ($boottstrapers as $boottstraper) {
    $boottstraper::bootstrap();
}