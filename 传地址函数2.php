<?php

function &updateStatic() {
    static $b = 0;
    $b = $b + 1;
    return $b;
}

$a = updateStatic();
echo $a."\r\n";

$a = 5;
$a = updateStatic();
echo $a."\r\n";

// 引用调用函数是为了修改内部的静态变量
$a = &updateStatic(); // 此时 a 指向了静态变量 b
echo $a."\r\n";
$a = 15;
$a = updateStatic();
echo $a."\r\n";


$c = &updateStatic();

unset($a);
var_dump($a);

echo "-------------static b 仍然存在------------------\r\n";
echo $c."\r\n";

?>