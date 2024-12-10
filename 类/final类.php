<?php
final class Math {
    public $pr = 3.14;
}

$math = new Math();
echo $math->pr; // 3.14

/* 下面代码会引发编译错误
class NewMath extends Math {
    public $pr = 2.71;
}*/


?>