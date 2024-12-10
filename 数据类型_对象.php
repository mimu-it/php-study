<?php
// 像是 java 和 js 的综合体
class Person {
    const Color = "yellow";
    public $name = "John Doe";
    public $age = 30;

    // 构造函数
    function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    // 析构函数
    function __destruct() {
        echo "Person {$this->name} is being destroyed.\r\n";
    }

    public function sayHello() {
        echo "Hello, my name is {$this->name} and I am {$this->age} years old.\r\n";
    }


    static function staticSayHello() {
        echo "Hello, I am a static method.\r\n";
    }
}


$person = new Person("xiao hu", 40);
$person->sayHello();
$person::staticSayHello();

?>