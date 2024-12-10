<?php

class bee {
    static public $a = 10;
    static public function show() {
        // 打印10
        echo get_class().": ".self::$a."--";
        echo static::$a;
    }
}


class lig extends bee {
    static public $a = 20;
}

echo bee::show(); // bee: 10--10
echo "\n";
echo lig::show(); // bee: 10--20

?>