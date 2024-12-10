<?php
header("Content-type:text/html; charset=GBK");
$link = mysqli_connect("localhost:3307", "root", "123", "logbook");

if($link != true) {
    echo "数据库连接不成功";
    die("数据库连接不成功".mysqli_connect_error());
}
else {
    echo "数据库连接成功";
    mysqli_close($link);
}
?>