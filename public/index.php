<?php

require_once "./../bootstrap/bootstrap.php";

$tt = new \Handlers\UpdateHandler();
$tt->processUpdate(json_decode(file_get_contents('php://input'), true));
