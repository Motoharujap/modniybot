<?php

require_once "./../bootstrap.php";
$countFilePath = STORAGE_PATH . '/logs/counter';
$count = (int)file_get_contents($countFilePath);
echo(++$count);
file_put_contents($countFilePath, $count);