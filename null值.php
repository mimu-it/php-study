<?php
$s1 = null;
if(is_null($s1)) {
    echo "变量s1未被赋值\r\n";
}

$s2 = '';
if(!is_null($s2)) {
    echo "变量s2被赋值\r\n";
}

unset($s2);
if(is_null($s2)) {
    echo "变量s2已被销毁\r\n";
}   
// 爆出PHP Notice:  Undefined variable: s2 是我们期望的
?>