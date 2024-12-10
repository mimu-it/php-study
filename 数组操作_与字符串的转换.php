<?php

$text = '1,2,3,4,5,6,7,8';
$result = explode(',', $text);
var_dump($result);

$arr = array('1', '2', '3', '4', '5', '6', '7', '8');
$result2 = implode(',', $arr);
echo $result2; // 1,2,3,4,5,6,7,8



?>