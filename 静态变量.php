<?php

function fun() {
    static $num = 0;
    $num += 1;
    echo $num."   ";
}

for ($i = 0; $i < 5; $i++) {
    fun();
}

?>