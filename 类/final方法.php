<?php

class Math {
    public final function max($a, $b) {
        echo $a.'-'.$b;
    }
}

/* 以下代码会引发编译错误
class NewMath extends Math {
    public function max($a, $b) {
        echo $a.'-'.$b;
    }
}*/

?>