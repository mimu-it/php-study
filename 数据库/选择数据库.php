<?php
header("Content-type:text/html; charset=GBK");
$link = mysqli_connect("localhost:3307", "root", "123");

if($link != true) {
    echo "数据库连接不成功";
    die("数据库连接不成功".mysqli_connect_error());
}
else {
    echo "数据库连接成功";

    $dbselect = @mysqli_select_db($link, "logbook");
    if($dbselect == true) {
        echo "数据库 logbook 已存在";
        mysqli_close($link);
    }
    else {
        echo "数据库选择不成功";
        die("数据库选择不成功".mysqli_connect_error());
    }
}
?>