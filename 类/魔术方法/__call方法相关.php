<?php

class A {
    public function __call($method, $args) {
        echo "__call方法被调用"."\n";
        echo $method."\n";
        var_dump($args);
    }
}


$p = new A();
// 调用一个未定义的方法
echo $p->getName(5, 6, 7);

?>