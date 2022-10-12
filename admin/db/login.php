<?php

if(empty($_POST['form-name']) || empty($_POST['form-password'])){
    //die($_POST['form-name']);
    header('Location: ../index.php?p=login&r=empty');
    exit();
}

$username = $_POST['form-name'];
$password = $_POST['form-password'];

// In the base page (directly accessed):
//define('_DEFVAR', 1);
include('../../db/conn.php');

$sql = "SELECT * FROM users WHERE name='$username' AND pass='$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    session_start();
    $_SESSION['id']=$row['id'];
    header('Location: ../index.php?pag=artigo');

} else {
    header('Location: ../index.php?pag=login&r=invalid');
}
$conn->close();
?>