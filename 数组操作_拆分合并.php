<?php
$fruit = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
foreach ($fruit as $key => $value) {
    echo "$key = $value\r\n";
}

echo "-------------取出其中一部分 after------------------\r\n";
// 取出第三个元素到第四个元素
$part = array_slice($fruit, 2);
foreach ($part as $key => $value) {
    echo "$key = $value\r\n";
}

echo "-------------取出其中一部分2 after------------------\r\n";
// 从倒数第二个开始取出1个元素
$part = array_slice($fruit, -2, 1);  // b = banana
foreach ($part as $key => $value) {
    echo "$key = $value\r\n";
}

echo "-------------删除元素 after------------------\r\n";
// 删除第二个元素， 从第二个元素开始，删除1个元素
array_splice($fruit, 1, 1);
foreach ($fruit as $key => $value) {
    echo "$key = $value\r\n";
}


echo "------------合并------------------\r\n";
$fruit = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
foreach ($fruit as $key => $value) {
    echo "$key = $value\r\n";
}

echo "\r\n";

$arr2 = array("e" => "melon", "f" => "grape");
foreach ($arr2 as $key => $value) {
    echo "$key = $value\r\n";
}

echo "------------合并 after------------------\r\n";

// 合并数组
$fruit = array_merge($fruit, $arr2);
foreach ($fruit as $key => $value) {
    echo "$key = $value\r\n";
}

?>