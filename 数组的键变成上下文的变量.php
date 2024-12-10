<?php

$a = "Original";

$my_array = array("a1" => "Cat", "b1" => "Dog", "c1" => "Rabbit");

extract($my_array);

echo "\$a1 = $a1\n";
echo "\$b1 = $b1\n";
echo "\$c1 = $c1\n";

echo "-------------------------------------\r\n";
$my_array = array("Cat", "Dog", "Rabbit");
// 给所有变量名加上前缀
extract($my_array, EXTR_PREFIX_ALL, "var");
echo "$var_0, $var_1, $var_2\n";

?>