<?php

define('DEBUG', False);

require_once "./../bootstrap.php";
$tt = $foo;
if($message = json_decode(file_get_contents('php://input'), true)) {
    $tt = new Components\UpdateManager();
    $tt->processUpdate($message);
}
