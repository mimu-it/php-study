<?php

$stack = array("orange", "banana", "apple");
$fruit = array_pop($stack);
var_dump($stack);
echo "被移除的元素是：$fruit\n";

echo "---------------------array_push-------------------------\n";

$len = array_push($stack, "kiwi");
var_dump($stack);
echo "入栈后数组的长度是：$len\n";


echo "---------------------array_shift- 移除数组的第一个元素 ------------------------\n";
$elementOut = array_shift($stack);
var_dump($stack);
echo "被移除的第一个元素是：$elementOut\n";


echo "---------------------array_shift- 从数组第一个元素开始插入值 ------------------------\n";
$lenAfterElementIn = array_unshift($stack, "mango", "grape");
var_dump($stack);
echo "从数组第一个元素开始插入值后数组的长度是：$lenAfterElementIn\n";
?>