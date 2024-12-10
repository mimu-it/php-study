<?php

class Base {
    function sayA() {
        echo "sayA::".__CLASS__."\n";
        echo "sayA::".get_class($this)."\n";
    }

    public static function find() {
        echo __CLASS__."\n";
    }
}


class Sub extends Base {
    function sayA() {
        parent::sayA();
        echo "--------------------------\n";
        echo "sayA::".__CLASS__."\n";
        echo "sayA::".get_class($this)."\n";
    }


    public static function find() {
        echo __CLASS__."\n";
    }
}


$p = new Sub();
$p->sayA();
echo "--------------------------\n";
Base::find();
Sub::find();


?>