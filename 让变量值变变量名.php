<?php

$a = 'hello';
$$a = 'world'; // 这里等同于 $hello = 'world';

echo $a."\r\n"; // hello
echo $hello."\r\n"; // world
echo $$a."\r\n"; // world
echo ${$a}."\r\n"; // world



?>