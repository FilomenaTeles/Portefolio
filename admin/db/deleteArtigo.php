<?php
session_start();
if(!isset($_SESSION['id'])){
    header('Location: ../index.php?p=404');
    exit();
}
$id=$_GET['id'];
include('../../db/conn.php');

$sql = "DELETE FROM artigos WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header('Location: ../index.php?pag=artigo&r=delok');
  } else {
    header('Location: ../index.php?pag=artigo&r=delerro');
  }

$conn->close();