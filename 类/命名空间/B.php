<?php
$dir = dirname(__FILE__);
include($dir.'/A.php');
require($dir.'/C.php');

$a = new com\factory\A();
echo $a->getAge()."\n";

echo "---------------------\n";

$c = new com\baymax\C();
echo $c->getAge()."\n";
?>