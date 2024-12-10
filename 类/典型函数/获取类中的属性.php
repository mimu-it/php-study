<?php

class A {
    public $name;
    var $age = 10;
    private $height = "175cm";

    function myclass() {
        return (TRUE);
    }
}

$a = new A();
// get_class_vars 是 PHP 的内置函数，用于获取类的默认属性。但是，get_class_vars 函数不能获取到私有属性。
$classVals = get_class_vars(get_class($a));
foreach($classVals as $key => $value) {
    echo "$key : $value \n";
}

echo "-------------------------\n";
print_r(get_object_vars($a));
?>