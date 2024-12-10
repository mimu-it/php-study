<?php
$str = '函数外';

function func() {
    $str = "函数内";
    echo 'func().str: '.$str."\r\n";
}

function func_global() {
    global $str;
    echo 'func_global().str: '.$str."\r\n";
    $str = "函数内修改";
}

func();
echo 'str: '.$str."\r\n";

func_global();
echo 'str after func_global(): '.$str."\r\n";

?>