<?php

$fromPackage = __DIR__."/../../autoload.php";

if (file_exists($fromPackage)) {
    require_once $fromPackage;
} else {
    require_once "./vendor/autoload.php";
}

$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();