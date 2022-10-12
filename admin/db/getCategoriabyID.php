<?php

if(!isset($_SESSION['id'])){
    header('Location: ../index.php?p=404');
    exit();
}
$id=$_GET['id'];
include('../db/conn.php');

$sql = "SELECT * FROM categorias WHERE id=$id";
$result = $conn->query($sql);

$rowCatg = $result->fetch_assoc();

if ($result->num_rows != 1) {
    header('Location: ../index.php?pag=404');
    exit();
}

$conn->close();