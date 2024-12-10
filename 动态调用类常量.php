<?php

class oof {
    const bar = <<<EOT
bar
EOT;

    public function getBar() {
        return self::bar;
    }

}

echo oof::bar."\r\n"; // 输出 bar

// 也可以用类名来调用常量
$className = 'oof';
echo $className::bar."\r\n"; // 输出 bar

// 直接 new 字符串，可以创建类实例
$class = new $className;
echo $class -> getBar()."\r\n"; // 输出 bar

?>