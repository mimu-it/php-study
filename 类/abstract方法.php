<?php
abstract class Human {
    abstract function talk();
    abstract function eat();
}


class Man extends Human {

    public function talk() {
        echo "Man talk\n";
    }

    public function eat() {
        echo "Man eat\n";
    }
}


$p = new Man();
$p->talk();
$p->eat();
?>