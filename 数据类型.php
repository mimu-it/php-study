<?php

// 布尔类型
$bar = true;
if($bar == true) {
    echo '这是真的';
    // 这里务必使用双引号
    echo "\r\n";
}

echo '----------------------------------------------------------'."\r\n";

// 整型
# 十进制
$a = 1000;
echo $a."\r\n";
// ‌‌var_dump函数的主要作用是输出变量的信息，包括变量的类型和值
var_dump($a);

echo '----------------------------------------------------------'."\r\n";
#八进制   1*8^3 + 0*8^2 + 0*8^1 + 0*8^0 = 1000
$b = 0100;
echo $b."\r\n";

# 十六进制 1*16^3 + 0*16^2 + 0*16^1 + 0*16^0 = 256
$c = 0x100;
echo $c."\r\n";

echo '----------------------------------------------------------'."\r\n";
// 浮点型
# 小数形式
$d = 123.456;
echo $d."\r\n";

echo 'printf("%.14f", $d) == ';
printf("%.14f\n", $d);

echo 'printf("%.15f", $d) == ';
printf("%.15f\n", $d);

echo 'printf("%.16f", $d) == ';
printf("%.16f\n", $d);

echo 'printf("%.53f", $d) == ';
printf("%.53f\n", $d);

# 指数形式  字母 "e" 在科学计数法中用作指数分隔符。它表示 "乘以 10 的多少次方"
// 1.23456e3 == 1.23456 * 1000
$e = 1.23456e3; 
echo $e."\r\n";

// 1.23456e-3 == 1.23456 * 0.001
$f = 1.23456e-3;
echo $f."\r\n";

echo '----------------------------------------------------------'."\r\n";
// 复合类型 - 数组
// 这里 = 等同于js中的 push
$user1[] = 'John Doe';
$user1[] = 30;
$user1[] = true;
$user1[] = array('name' => 'Jane Doe', 'age' => 25);
var_dump($user1);

echo '----------------------------------------------------------'."\r\n";
$user2 = array('name' => 'John Doe', 'age' => 30, 'is_admin' => true);
var_dump($user2);

echo '----------------------------------------------------------'."\r\n";
$user3 = array('John Doe', 30, true, array('name' => 'Jane Doe', 'age' => 25));
var_dump($user3);

echo '----------------------- print_r($user4) -----------------------------------'."\r\n";
$user4 = array('r' => 1, 2, 3);
print_r($user4);

echo '----------------------- print_r($user4 + $user5); -----------------------------------'."\r\n";
$user5 = array('r' => 7, 8, 9);
print_r($user4 + $user5);

echo '----------------------- print_r(array_merge($user4, $user5)); -----------------------------------'."\r\n";
print_r(array_merge($user4, $user5));

?>