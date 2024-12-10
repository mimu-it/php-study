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

    /**
     * 书上说这样写没有问题，但是实际运行，会出现告警
     */
    public function getHeight($a, $b) {
        echo "参数为：$a, $b\n";
        return $this->height;
    }
}



$human = new Human();
echo "Human's height: ".$human->getHeight()."\n";

$man = new Man();
echo "Man's height: ".$man->getHeight(1, 2)."\n";

?>