<?php

class Product {
    private $name = "IBM";

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }
}

$p = new Product();
echo $p->getName(); // 输出 IBM

echo "\n";

$p->setName("Apple");
echo $p->getName(); // 输出 Apple

echo "\n";

// huawei会被忽略
$p->setName("xiaomi", "huawei");
echo $p->getName(); // 输出 xiaomi

?>