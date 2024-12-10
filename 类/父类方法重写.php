<?php
class Human {
    private $height = '172cm';

    public function getHeight() {
        return $this->height;
    }

    public function setHeight($height) {
        $this->height = $height;
    }
}


class Man extends Human {
    private $height = '180cm';

    public function getHeight() {
        echo '调用父类方法：'.parent::getHeight()."\n"; // 父类方法的调用
        return $this->height;
    }
}



$human = new Human();
echo "Human's height: ".$human->getHeight()."\n";

$man = new Man();
echo "Man's height: ".$man->getHeight()."\n";

?>