<?php

class Product {
    public static $count = 0;
    public $id = 10;
    const  NAME = 'Product';

    /**
     * 可以通过类调用此方法，虽然不是声明为静态方法
     * 但是如果内部出现$this, 可能会出现问题 
     */
    public function get() {
        // 使用 self 可以避免java那样直接使用类名，更方便
        echo self::NAME.': '.self::$count;
    }

    public function get2() {
        echo $this->NAME.': '.self::$count;
    }
}

echo Product::$count."\n"; // 0
echo Product::NAME."\n"; // Product

echo "---------------------\n";
// 刷新三观，这个可以正常运行
echo Product::get()."\n"; // Product: 0

try {
    echo Product::get2()."\n"; // Product: 0
} catch ( Error $e ) {
    // 处理异常的代码
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}


$p = new Product();
echo $p->get()."\n";

?>