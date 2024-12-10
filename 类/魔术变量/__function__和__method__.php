<?php

class test {

    function a() {
        echo __FUNCTION__."\n"; // a
        echo __METHOD__."\n"; // test::a
    }
}

function good() {
    echo __FUNCTION__."\n"; // good
    echo __METHOD__."\n"; // good
}

$p = new test();
$p->a();

echo "-----------------------------\n";

good();
?>