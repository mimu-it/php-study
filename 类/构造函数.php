<?php

class Product{
    /**
     * 不能像java一样再写个空参数构造函数
     */
    public function __construct($name, $price, $stock){
        echo "Product created: ".$name.", ".$price.", ".$stock."\n";
    }
}

$p = new Product("Apple", 1999.99, 100);

?>