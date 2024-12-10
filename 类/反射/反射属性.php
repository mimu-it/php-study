<?php

class MyClass {
    public $publicProperty = 'public';
    private $privateProperty = 'private';
}
 
$reflection = new ReflectionClass('MyClass');
$properties = $reflection->getProperties();
 
foreach ($properties as $property) {
    echo $property->getName() . "\n";
}

echo "-----------------------\n";

$obj = new MyClass();
print_r(get_object_vars($obj));

?>