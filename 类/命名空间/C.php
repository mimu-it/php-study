<?php
namespace com\baymax;
class C {
    private $age = 220;

    function getAge() {
        return __NAMESPACE__.": ".$this->age;
    }
}


?>