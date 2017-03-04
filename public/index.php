<?php

require_once "./../bootstrap.php";
$count = (int)file_get_contents(__DIR__.'/../logs.txt');
echo(++$count);
file_put_contents(__DIR__.'/../logs.txt', $count);