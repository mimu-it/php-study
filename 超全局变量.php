<?php

$x = 75;
$y = 25;

function addition() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

addition();
echo $z; // 100

echo "\r\n-------------------------------\r\n";

if(isset($_SERVER['HTTP_HOST'])) {
    echo $_SERVER['HTTP_HOST']; // 127.0.0.1
}

echo "\r\n-------------------------------\r\n";

if(isset($_SERVER['PHP_SELF'])) {
    echo $_SERVER['PHP_SELF']; // 127.0.0.1
}

?>