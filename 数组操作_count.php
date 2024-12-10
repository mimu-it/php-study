<?php

$arr1 = array('name'=>'凯', 'age'=>18, 1.23=>'hello');

echo '---------------------count-------------------------------------'."\r\n";
echo count($arr1)."\r\n"; // 3
//下面用于统计多维数组
echo count($arr1, COUNT_RECURSIVE)."\r\n";

echo '---------------------sizeof-------------------------------------'."\r\n";
echo sizeof($arr1)."\r\n"; // 3

echo '---------------------array_count_values-------------------------------------'."\r\n";
$ac = array_count_values($arr1);
var_dump($ac);

?>