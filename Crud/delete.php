<?php
$id = $_GET['id'];


$msg = '';

$id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);


if (filter_var($id, FILTER_VALIDATE_INT)) {

    require 'dbConnection.php';

    $sql = "delete from posts where id =" . $id;

    $op = mysqli_query($connection, $sql);

    if ($op) {

        $msg = "User Deleted";
    } else {
        $msg = 'Please try again!';
    }
} else {
    $msg = "invalid id";
}


$_SESSION['msg'] = $msg;

header("Location: index.php");
