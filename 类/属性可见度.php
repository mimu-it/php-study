<?php

class Product {
    public $name = 'sony';
    protected $price = 1999.99;
    private $stock = 100;
}

$p = new Product();

// 公有属性可以被类外部直接访问
// sony
echo $p->name."\n";

try {
    // 可能会引发异常的代码
    // 受保护属性可以被类内部和继承类中的方法访问
    echo $p->price;
} catch ( Error $e ) {
    // 处理异常的代码
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}

// 私有属性只能被类内部方法访问
try {
    // 可能会引发异常的代码
    // 受保护属性可以被类内部和继承类中的方法访问
    echo $p->stock;
} catch ( Error $e ) {
    // 处理异常的代码
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}

?>