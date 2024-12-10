<?php
$mysqli = new mysqli();
$mysqli->connect("localhost:3307", "root", "123", "logbook");
$mysqli->set_charset('utf8');
$sql = "select * from log";
$result = $mysqli->query($sql);

$n = 0;
while(1) {
    if(!$row = $result->fetch_field_direct($n++)) {
        break;
    }

    echo $row->name. " ". $row->table." ".$row->type."\n";
}

echo "================================================================\n";

while($row = $result->fetch_field()) {
    echo $row->name. " ". $row->table." ".$row->type."\n";
}

echo "================================================================\n";
$row = $result->fetch_fields();
foreach($row as $field) {
    echo $field->name. " ". $field->table." ".$field->type."\n";
}

$result->close();

?>