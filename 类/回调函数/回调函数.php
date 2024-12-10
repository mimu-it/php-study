<?php

class A {
    public function foo() {
        echo "A::foo()\n";
    }

    protected static function bar() {
        echo "A::bar()\n";
    }
}


function isValidMethod($class, $method) {
    return method_exists($class, $method) && is_callable(array($class, $method));
}


function invokeMethod($class, $method) {
    return call_user_func(array($class, $method), array());
}

echo "Invoking A::foo():\n";
print isValidMethod("A", "foo")? "Valid method\n" : "Invalid method\n";

echo "------------------------------------\n";

echo "Invoking A::bar():\n";
print isValidMethod("A", "bar")? "Valid method\n" : "Invalid method\n";

echo "------------------------------------\n";
$a = new A();

echo 'Invoking $a->foo():'."\n";
print isValidMethod($a, "foo")? "Valid method\n" : "Invalid method\n";
invokeMethod($a, "foo");  // 注意，$a 作为函数参数，$a->foo() 作为函数调用，两者是不一样的)

echo 'Invoking $a->bar():'."\n";
print isValidMethod($a, "bar")? "Valid method\n" : "Invalid method\n";
?>