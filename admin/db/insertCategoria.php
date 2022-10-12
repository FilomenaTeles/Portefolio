<?php
session_start();
if(!isset($_SESSION['id'])){
    header('Location: ../index.php?pag=404');
    exit();
}

if(empty($_POST['form-nome']) || empty($_POST['form-nome-icon']) || !isset($_POST['form-visibility'])){
  header('Location: ../index.php?pag=categorias&insert=empty');
  exit();
}
$name = $_POST['form-nome'];
$icon_name = $_POST['form-nome-icon'];
$visibility = $_POST['form-visibility'];


include('../../db/conn.php');

$sql = "INSERT INTO categorias (name, icon_name, visibility)
VALUES ('$name', '$icon_name', $visibility)";


if ($conn->query($sql) === TRUE) 
    header('Location: ../index.php?pag=categorias&r=insertok');
else
    header('Location: ../index.php?pag=categorias&r=inserterro');
?>