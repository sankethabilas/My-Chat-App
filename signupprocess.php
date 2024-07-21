<?php


$fname = $_POST["f"];
$lname = $_POST["l"];
$nname = $_POST["n"];
$email = $_POST["e"];
$pw = $_POST["p"];


$con = new mysqli("localhost", "root", "Abi0021@", "d21", "3306");

if ($con->connect_error) {

    die("connection failed:".$con->connect_error);

}

// echo("connected succesfully!");

$q="INSERT INTO `user` (`fname`,`lname`,`nname`,`email`,`password`) VALUES
('".$fname."','".$lname."','".$nname."','".$email."','".$pw."')";

$con->query($q);

echo("s");

?>
