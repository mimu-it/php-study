<?php
$server = "localhost:3307";
$username = 'root';
$password = '123';
$dbname = 'logbook';

$mysqli = new Mysqli($server, $username, $password, $dbname);
if($mysqli->connect_error) {
    die('Connect Error: '.$mysqli->connect_errno);
}
else {
    $mysqli->set_charset('UTF-8');
    print("Connected successfully");
    $mysqli->close();
}
?>