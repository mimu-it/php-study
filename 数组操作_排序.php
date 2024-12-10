<?php
// 升序
$arr = array(56, 9, 12, 100, 32);
foreach($arr as $v) {
    echo $v."  ";
}

echo "\r\n".'-------------------------sort---------------------------------'."\r\n";
sort($arr);

foreach($arr as $v) {
    echo $v."  ";
}

echo "\r\n".'-------------------------rsort---------------------------------'."\r\n";
// 降序
$arr = array(56, 9, 12, 100, 32);

rsort($arr);
foreach($arr as $v) {
    echo $v."  ";
}


echo "\r\n".'-------------------------sort($arr, SORT_STRING)---------------------------------'."\r\n";
// 按字符串升序
$arr = array(56, 9, 12, 100, 32);

// SORT_NUMERIC 按数字升序
// SORT_STRING 按字符串升序
// SORT_REGULAR 按值本身升序
// SORT_DESCENDING 按值本身降序
sort($arr, SORT_STRING);
foreach($arr as $v) {
    echo $v."  ";
}

echo "\r\n".'-------------------------asort() 排序值---------------------------------'."\r\n";
$fruit = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
foreach ($fruit as $key => $value) {
    echo "$key = $value\r\n";
}

echo "\r\n".'-------------------------after---------------------------------'."\r\n";
//对 fruit进行升序排序，并重新索引
asort($fruit);
foreach ($fruit as $key => $value) {
    echo "$key = $value\r\n";
}


echo "\r\n".'-------------------------ksort() 排序键---------------------------------'."\r\n";
$fruit = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
foreach ($fruit as $key => $value) {
    echo "$key = $value\r\n";
}

echo "\r\n".'-------------------------after---------------------------------'."\r\n";
//对 fruit进行升序排序，并重新索引
ksort($fruit);
foreach ($fruit as $key => $value) {
    echo "$key = $value\r\n";
}

?>