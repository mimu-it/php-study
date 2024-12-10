<?php

function sum($a, $b, $c = 0) {
    return $a + $b + $c;
}

echo sum(1, 2, 3)."\r\n"; // 6 
echo "-------------------------------\r\n";

function sum2($params) {
    $total = 0;
    foreach ($params as $i) {
        $total += $i;
    }
    return $total;
}

echo sum2([1, 2, 3, 4, 5])."\r\n"; // 15
echo "-------------------------------\r\n";

function sum3(...$params) {
    return array_sum($params);
}

echo sum3(1, 2, 3, 4, 5, 6)."\r\n"; // 21
echo "-------------------------------\r\n";

function sum4($a, $b, callable $callback) {
    return $callback($a, $b);
}

echo sum4(1, 2, function($a, $b) {
    return $a + $b;
})."\r\n"; // 3
echo "-------------------------------\r\n";

function sum5($a, $b, callable $callback = null) {
    return $callback === null? $a + $b : $callback($a, $b);
}

echo sum5(1, 2, function($a, $b) {
    return $a - $b;
})."\r\n"; // -1
echo "-------------------------------\r\n";


function sum6() {
    $total = 0;
    $varArray = func_get_args();
    foreach ($varArray as $i) {
        $total += $i;
    }

    return $total;
}

echo sum6(1, 2, 3, 4, 5, 6, 7)."\r\n"; // 21

?>