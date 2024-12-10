<?php

class Human {
    public function __construct() {
        echo "父类构造方法执行 Human created\n";
    }
}

class Man extends Human {
    public function __construct() {
        echo "父类构造方法执行 Man created\n";
    }
}

$man = new Man();
?>