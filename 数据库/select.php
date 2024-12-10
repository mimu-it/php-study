<?php
header("Content-type:text/html; charset=GBK");
$link = mysqli_connect("localhost:3307", "root", "123", "logbook") or die("Couldn't connect: ".mysql_error());

if($link != true) {
    echo "数据库连接不成功";
    die("数据库连接不成功".mysqli_connect_error());
}
else {
    mysqli_set_charset($link, "utf8");

    $sql ="select * from log";
    $result = mysqli_query($link, $sql);

    echo "数据库查询成功: ".mysqli_num_rows($result)."条记录"."\n";

    $count = 0;
    while($row = mysqli_fetch_row($result)) {
        echo "<br>ID: ".$row[0].", 创建时间: ".$row[1].", 创建者: ".$row[2].", 修改时间: ".$row[3]."\n";
        $count ++;
        if($count == 3) {
            break;
        }
    }

    echo "------------------------------------------------"."\n";

    $count = 0;
    while($row = mysqli_fetch_assoc($result)) {
        echo "<br>ID: ".$row["id"].", 创建时间: ".$row["gmt_created"].", 创建者: ".$row["creator"].", 修改时间: ".$row["gmt_modified"]."\n";
        $count ++;
        if($count == 3) {
            break;
        }
    }

    echo "------------------------------------------------"."\n";

    $count = 0;
    while($row = mysqli_fetch_object($result)) {
        echo "<br>ID: ".$row->id.", 创建时间: ".$row->gmt_created.", 创建者: ".$row->creator.", 修改时间: ".$row->gmt_modified."\n";
        $count ++;
        if($count == 3) {
            break;
        }
    }

    mysqli_close($link);
}
?>