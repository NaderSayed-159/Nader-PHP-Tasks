<?php
session_start();


$server = 'localhost';
$dbName = '2nd database';
$dbUser = 'root';
$dbPassowrd = '';

$connection = mysqli_connect($server, $dbUser, $dbPassowrd, $dbName);


if (!$connection) {
    die('There is Erorr ' . mysqli_connect_error());
}
