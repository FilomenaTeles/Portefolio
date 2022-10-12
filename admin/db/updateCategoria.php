<?php

if(empty($_POST['form-id']) || empty($_POST['form-nome']) || empty($_POST['form-nome-icon']) || !isset($_POST['form-visibility'])){
    header('Location: ../index.php?pag=categorias&insert=empty');
    exit();
  }
  $id = $_POST['form-id'];
  $name = $_POST['form-nome'];
  $icon_name = $_POST['form-nome-icon'];
  $visibility = $_POST['form-visibility'];


include('../../db/conn.php');

$sql = "UPDATE categorias SET name='$name', icon_name='$icon_name', visibility=$visibility WHERE id=$id";

if ($conn->query($sql) === TRUE) 
    header('Location: ../index.php?pag=categorias&r=editok');
else
    header('Location: ../index.php?pag=categorias&r=editerro');
$conn->close();
?>