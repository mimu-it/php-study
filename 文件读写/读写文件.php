<?php
$directory = '/Volumes/HD-FOR-MAC/DEV_ENV/projects/webApp/VscodeProjects/php-study/文件读写';

// 先写文件
$file = fopen($directory.'/newfile.txt', 'w') or die("Unable to open file");
if($handle = opendir($directory)) { 
    fwrite($file, "This is a test\n");
}

# 这样也可以注释
// 再读这个目录下的文件
while (($entry = readdir($handle))!== false) { 
    echo $entry. "\n"; 
}

fclose($file);
?>