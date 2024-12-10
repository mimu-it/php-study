<?php
$a = "123";
echo (float)$a."\r\n";
echo var_dump((float)$a);
echo '----------------------------------------------------------'."\r\n";

$str = "123.9abc";
$int = intval($str);
echo $int."\r\n";
echo var_dump($int);


$float = floatval($str);
echo $float."\r\n";
echo var_dump($float);


$str = strval(123.98);
echo $str."\r\n";
echo var_dump($str);

echo '----------------------------------------------------------'."\r\n";

$str = "1.9";
settype($str, "int");// settype()函数会改变原变量值
echo $str."\r\n";
echo gettype($str)."\r\n";

$str = "1.9";
settype($str, "float");// settype()函数会改变原变量值
echo $str."\r\n";
echo gettype($str)."\r\n";

$str = "1.9";
settype($str, "double");// settype()函数会改变原变量值
echo $str."\r\n";
echo gettype($str)."\r\n";

?>