<?php
header("Content-type:text/html; charset=GBK");
$link = mysqli_connect("localhost:3307", "root", "123");

if($link != true) {
    echo "数据库连接不成功";
    die("数据库连接不成功".mysqli_connect_error());
}
else {
    echo "数据库连接成功";

    $result = mysqli_query($link, "show databases");
    $dbs2 = array();
    while($db = mysqli_fetch_row($result)) {
        $dbs2[] = $db[0];
    }

    print_r($dbs2);

    echo "----------------------------------------------------------"."\r\n";

    $result2 = mysqli_query($link, "show databases");
    while($row = mysqli_fetch_object($result2)) {
        echo $row->Database."\r\n";
    }

    mysqli_close($link);
}
?>