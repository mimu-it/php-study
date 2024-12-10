<?php
class Human {
    public function max() {
        return 100;
    }

    /* 会提示编译错误
    public function max($a) {
        echo "参数为：$a\n";
        return 200;
    }*/
}


?>