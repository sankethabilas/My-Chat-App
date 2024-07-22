<?php

session_start();

$email = $_POST["e"];
$password = $_POST["p"];

$con = new mysqli("localhost", "root", "Abi0021@", "d21", "3306");

if ($con->connect_error) {

    die("connection failed:" . $con->connect_error);
}

// echo("connected succesfully!");

$q = "SELECT * FROM `user` WHERE `email`='" . $email . "' AND `password`='" . $password . "'  ";

$r = $con->query($q);

$num = $r->num_rows;

if ($num == 1) {
    $data = $r->fetch_assoc();
    $_SESSION["u"] = $data;
    echo ("Success");
} else {
    echo ("Invalid Email Or Password");
}
?>