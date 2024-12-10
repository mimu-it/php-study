<?php

class A {

    private $age = 42;

    /**
     * 有了这个方法，即便 $p->age设置值 是访问私有属性，也不会报错
     */
    public function __set($key, $value) {
        echo '__set被调用'."\n";
        echo "\$key = {$key}, \$value = {$value}"."\n";
    }
}


$p = new A();

//给未声明的属性复制，会触发__set()
$p->name = "xiao.hu";

// 试图给不具备访问权限的属性赋值，也会触发__set()， 但是没有报错
$p->age = 24;

try{
    echo $p->age;
} catch(Error $e) {
    // 处理异常的代码
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}

?>