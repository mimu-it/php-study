<?php

class oof {
    var $bar = 'I am bar.';
    var $arr = array('foo' => 'I am foo.', 'bar' => 'I am bar.');
    var $r = 'I am r.';
}

$obj = new oof();

// 注意这里的 bar前面没有美元符号
echo $obj->bar."\r\n"; // I am bar. 

$names = array('bar', 'arr', 'r');
echo $obj->{$names[0]}."\r\n"; // I am bar.
echo $obj->arr['foo']."\r\n"; // 等同于 ($obj->arr)['foo']

// 可以使用字面意思来调用类中的变量
$nameArr = 'arr';
echo $obj->{$nameArr}['foo']."\r\n"; // I am foo.

// 也可以使用字符串接来调用类中的变量
$start = 'b';
$end = 'ar';
echo $obj->{$start.$end}."\r\n"; // I am bar.

?>