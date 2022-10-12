<?php
session_start();
if(!isset($_SESSION['id'])){
    header('Location: ../index.php?pag=404');
    exit();
}

if(empty($_POST['form-titulo']) || empty($_POST['form-descricao']) || empty($_POST['form-desenvolvimento']) || empty($_POST['form-categoria']) || !isset($_POST['form-visibility'])){
  header('Location: ../index.php?pag=addArtigo&insert=empty');
  exit();
}
$titulo = $_POST['form-titulo'];
$descricao = $_POST['form-descricao'];
$desenvolvimento = $_POST['form-desenvolvimento'];
$categoria = $_POST['form-categoria'];
$visibility = $_POST['form-visibility'];


include('../../db/conn.php');

$sql = "INSERT INTO artigos (titulo, descricao, desenvolvimento, categoria_id, visibility,data,contador)
VALUES ('$titulo', '$descricao', '$desenvolvimento', $categoria, $visibility,Now(),1)";


if ($conn->query($sql) === TRUE) 
    header('Location: ../index.php?pag=artigo&r=insertok');
else
    header('Location: ../index.php?pag=artigo&r=inserterro');
?>