<?php

require_once "./../bootstrap.php";

$tt = new \Handlers\UpdateHandler();
$tt->handle(json_decode(file_get_contents('php://input'), true));
