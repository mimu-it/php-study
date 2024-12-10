<?php

class Window {
    var $state;

    public function close() {
        $this->state = "close";
    }

    protected function open() {
        $this->state = "open";
    }

    private function minimize() {
        $this->state = "minimize";
    }
}

$p = new Window();
if(method_exists($p, 'close')) {
    echo "close method exists\n";
}

if(method_exists($p, 'open')) {
    echo "open method exists\n";
}

if(method_exists($p, 'minimize')) {
    echo "minimize method exists\n";
}

echo "-------------------------\n";
if(is_callable(array($p, 'close'))) {
    echo "close method exists\n";
}

// is_callable无法访问被保护方法
if(is_callable(array($p, 'open'))) {
    echo "open method exists\n";
}

// is_callable无法访问被保护方法
if(is_callable(array($p, 'minimize'))) {
    echo "minimize method exists\n";
}

?>