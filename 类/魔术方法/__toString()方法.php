<?php

class A {
    public function __toString() {
        echo '__toString 方法被调用了'."\n";
        return "A";
    }
}

$a = new A();

echo $a;

?>