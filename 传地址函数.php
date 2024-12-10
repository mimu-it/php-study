<?php
// 如果需要 $b = &oof($a); 这样调用方法，则方法前必须使用 &
// 其目的是返回 $param 的地址
function &oof(&$param) {
    $param = 12;
    return $param;
}

$a = 10;
echo "a = $a\r\n";

$b = oof($a);
echo "a = $a\r\n"; // a = 12

$b = 23;
echo "a = $a\r\n"; // a = 12

echo "-------------------------------\r\n";

$a = 10;
echo "a = $a\r\n";

// 这是函数引用调用方式
$b = &oof($a);
echo "a = $a\r\n"; // a = 12

$b = 23;
echo "a = $a\r\n"; // a = 23

?>