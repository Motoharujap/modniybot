<?php

define('DEBUG', False);

require_once "./../bootstrap.php";

$tt = new Components\Handlers\UpdateHandler();
$tt->processUpdate(json_decode(file_get_contents('php://input'), true));
