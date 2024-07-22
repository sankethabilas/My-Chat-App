<?php

session_start();

$sender = $_SESSION["u"]["id"];
$text = $_POST["t"];
$receiver = $_POST["r"];

$d = new DateTime();
$tz = new DateTimeZone("Asia/Colombo");
$d->setTimezone($tz);
$date = $d->format("Y-m-d H:i:s");

$con = new mysqli("localhost", "root", "Abi0021@", "d21", "3306");

if ($con->connect_error) {

    die("connection failed:" . $con->connect_error);
}

// echo("connected succesfully!");

$q="INSERT INTO `chat` (`msg`,`sender`,`reciever`,`msg_time`) VALUES
('".$text."','".$sender."','".$receiver."','".$date."')";

$con->query($q);
echo("success");

?>