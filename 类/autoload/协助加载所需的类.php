<?php

function __autoload($className) {
    echo "do __autoload:".$className."\n";
    include_once '/Volumes/HD-FOR-MAC/DEV_ENV/projects/webApp/VscodeProjects/php-study/类/命名空间/'.'A.php';
}

$a = new com\factory\A();
echo $a->getAge();
?>