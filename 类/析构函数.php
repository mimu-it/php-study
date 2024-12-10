<?php

class Product {
    public function __destruct() {
        echo "Product destroyed\n";
    }
}

$p = new Product();
$p = null; // 显式销毁

?>