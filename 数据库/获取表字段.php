<?php
header("Content-type:text/html; charset=GBK");
$link = mysqli_connect("localhost:3307", "root", "123", "logbook");

if($link != true) {
    echo "数据库连接不成功";
    die("数据库连接不成功".mysqli_connect_error());
}
else {
    echo "数据库连接成功";

    $result = mysqli_query($link, "select * from log");
    $dbs2 = array();
    while($fieldInfo = mysqli_fetch_field($result)) {
        echo $fieldInfo->table." ";
        echo $fieldInfo->name." ";
        echo $fieldInfo->type." ";
        echo $fieldInfo->max_length."\n";
    }

    mysqli_free_result($result);
    mysqli_close($link);
}
?>