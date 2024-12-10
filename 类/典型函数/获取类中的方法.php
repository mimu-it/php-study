<?php

class Window {
    var $state;

    function close() {
        $this->state = "close";
    }

    function open() {
        $this->state = "open";
    }
}

//获取类中的方法
$methods = get_class_methods("Window");

for($i=0; $i<count($methods); $i++) {
    echo $methods[$i].", ";
}
?>