<?php

// 变量固定使用美元符号开头，而且区分大小写
$a;
echo '$a 有默认值:'.$a."\r\n";


$a = "hello";
$b = $a; // $b 被传值
echo '$a:'.$a."\r\n";
echo '$b:'.$b."\r\n";
echo '我们修改a，看看b是否跟着变化:'."\r\n";
$a = "world";
echo '$a:'.$a."\r\n";
echo '$b:'.$b."\r\n"; // b 并未被修改

echo '---------------------'."\r\n";
$b = &$a; // $b 被传引用
echo '我们修改a，看看b是否跟着变化:'."\r\n";
$a = "world";
echo '$a:'.$a."\r\n";
echo '$b:'.$b."\r\n"; // b 也被修改


?>