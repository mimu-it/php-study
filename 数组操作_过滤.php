<?php

$entry = array(
    0 => '不错', //ok
    1 => false,
    2 => 1, //ok
    3 => null,
    4 => '',
    5 => 'dhjsdkasjdkaakd', //ok
    6 => '0',
    7 => array(),
    8 => 0
);

// 过滤掉 false, null, '', 0, '0', array() 等值
$validator = array_filter($entry);
var_dump($validator); 

echo "---------------------\n";
 
$array = array("", '', '2', '', '', 11, 13, 14, 15, 16);
foreach ($array as $key => $value) {
    if($value == '') {
        unset($array[$key]); // 删除元素
    }
}

var_dump($array); // 此时第一个元素 从索引 2 开始
var_dump(array_values($array)); // 转化为值数组, 重新索引数组
?>