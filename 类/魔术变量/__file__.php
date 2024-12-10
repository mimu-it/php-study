<?php

// dirname() 就是为了找目标路径的所在路径
define('ROOT_PATH', dirname(__FILE__).DIRECTORY_SEPARATOR);
echo 'ROOT_PATH:'.ROOT_PATH."\n";
echo 'FILE:'.__FILE__."\n";
echo 'dirname(__FILE__):'.dirname(__FILE__)."\n";
echo dirname(dirname(__FILE__));
?>