<?php
abstract class Product {
    public function get() {

    }
}

try{
    $p = new Product(); // 编译器会报错
} catch (Error $e) {
    echo $e->getMessage(); // 未定义的类 Product
}

echo "\n---------------------\n";

class Book extends Product {

}

$p = new Book();
?>