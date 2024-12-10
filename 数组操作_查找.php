<?php

$arr1 = array('name'=>'凯', 'age'=>18, 1.23=>'hello');

//是否存在值
var_dump(in_array('凯', $arr1)); // true

//找到该值对应的键
var_dump(array_search('凯', $arr1)); // name

//是否存在键 区分大小写
var_dump(array_key_exists('age', $arr1)); // name


// 兼顾性能和准确性的查找
// isset() 功能更强大，返回布尔值，不仅可以检查键是否存在，还可以检查值是否存在
// 但 isset() 并不保证返回 true 的时候值一定存在, isset(null) 和 isset('') 都返回 false, isset(array()) 也返回 false, isset(0) 也返回 false
// array_key_exists() 才保证返回 true 的时候值一定存在
if(isset($arr1['age']) || array_key_exists('age', $arr1)) {
    echo '存在age键';
}
?>