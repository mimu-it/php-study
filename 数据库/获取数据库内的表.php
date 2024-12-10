<?php
header("Content-type:text/html; charset=GBK");
$link = mysqli_connect("localhost:3307", "root", "123", "logbook");

if($link != true) {
    echo "数据库连接不成功";
    die("数据库连接不成功".mysqli_connect_error());
}
else {
    echo "数据库连接成功";

    $result = mysqli_query($link, "show tables");
    $dbs2 = array();
    while($db = mysqli_fetch_row($result)) {
        $dbs2[] = $db[0];
    }

    print_r($dbs2);

    echo "----------------------------------------------------------"."\r\n";

    $result2 = mysqli_query($link, "show tables");
    while($row = mysqli_fetch_array($result2)) {
        echo $row[0]."\r\n";
    }

    mysqli_close($link);
}
?>