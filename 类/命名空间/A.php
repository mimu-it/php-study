<?php

namespace com\factory;
class A {
    private $age = 10;

    function getAge() {
        return __NAMESPACE__.": ".$this->age;
    }
}


//echo __NAMESPACE__;
?>