<?php
session_start();
if(!isset($_SESSION['id'])){
    header('Location: ../index.php?p=404');
    exit();
}
$id=$_GET['id'];
include('../../db/conn.php');

$sql = "DELETE FROM categorias WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header('Location: ../index.php?pag=categorias&r=delok');
  } else {
    header('Location: ../index.php?pag=categorias&r=delerro');
  }

$conn->close();