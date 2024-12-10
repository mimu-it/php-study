<?php
define('default_path', '/var/www');
echo 'default_path is:'.default_path."\r\n";
echo 'DEFAULT_PATH is:'.DEFAULT_PATH."\r\n"; // 会引发警告

if(!defined('DEFAULT_PATH')) {
    echo "DEFAULT_PATH 未被定义"."\r\n";
}

define('default_path2', '/var/www2', true);// 不区分大小写
echo 'default_path2 is:'.default_path2."\r\n";
echo 'DEFAULT_PATH2 is:'.DEFAULT_PATH2."\r\n";

if(defined('DEFAULT_PATH2')) {
    echo "DEFAULT_PATH2 有定义"."\r\n";
}
?>