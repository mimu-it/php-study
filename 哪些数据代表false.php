<?php
//  echo函数会将布尔值转换为相应的字符串进行输出。true会被转换为字符串”1″，false会被转换为空字符串。

$param = null;
echo '$param == false:'.(boolean)($param == false);
echo "\r\n";
echo '$param != false:'.(boolean)($param != false);
echo "\r\n";

$param = false;
echo '$param == false:'.($param == false);
echo "\r\n";
echo '$param != false:'.($param != false);
echo "\r\n";

echo '----------------------------------------------------------'."\r\n";
//print_r函数用于打印变量的易读信息
$param = null;
print_r('$param:'.$param);
echo "\r\n";

$param = false;
print_r('$param:'.$param);
echo "\r\n";

$param = true;
print_r('$param:'.$param);
echo "\r\n";

$param = TRUE;
print_r('$param:'.$param);
echo "\r\n";

$param = FALSE;
print_r('$param:'.$param);
echo "\r\n";


echo '----------------------------------------------------------'."\r\n";
$bool = true;
echo sprintf("布尔值为%s", $bool ? "true" : "false");  // 输出：布尔值为true
echo "\r\n";
$bool = false;
echo sprintf("布尔值为%s", $bool ? "true" : "false");  // 输出：布尔值为false

?>