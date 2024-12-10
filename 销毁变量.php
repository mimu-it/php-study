<?php

$a = array('a' => 'a', 'b' => 'b');
$b = array('a' => 'a', 'b' => 'b');

// 释放内存
$a['b'] = null;

// 注意销毁变量，但不会释放内存
unset($b['b']);

var_dump($a);
var_dump($b); 


?>