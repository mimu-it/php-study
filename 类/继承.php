<?php

class Human {
    private $height;

    public function getHeight() {
        return $this->height;
    }

    public function setHeight($height) {
        $this->height = $height;
    }

    public function __construct() {
        echo "父类构造方法执行 Human created\n";
    }

    protected function doIt() {
        echo "父类 protected 方法 doIt() 执行\n";
    }
}

class Man extends Human {
    
    public function say() {
        echo "I am a man, height: ".$this->getHeight()."\n";
    }

    /**
     * 要调用父类方法，必须再加一个方法进行包装
     */
    public function tryDoIt() {
        echo parent::doIt(); // 调用父类 protected 方法 doIt()
    }
}

$man = new Man();
$man->setHeight(175);

echo "Man's height: ".$man->getHeight()."\n";
echo $man->say();


echo "------------------------------\n";
echo $man->tryDoIt(); // 调用父类 protected 方法 doIt()

try {
    echo $man->doIt(); // 父类 protected 方法 doIt() 无法在子类中直接调用
} catch ( Error $e ) {
    // 处理异常的代码
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}


?>