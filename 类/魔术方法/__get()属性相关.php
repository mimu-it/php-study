<?php

class A {
    private $age = 99;

    public function __get($key) {
        echo "__get方法被调用, \$key = {$key}";
    }
}

$a = new A();
//访问未定义属性会触发 __get
echo $a->name."\n";
//访问无权限属性会触发 __get
echo $a->age."\n";

?>