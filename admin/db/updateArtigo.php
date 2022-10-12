<?php

if(empty($_POST['form-id']) || empty($_POST['form-titulo']) || empty($_POST['form-descricao']) || empty($_POST['form-desenvolvimento']) || empty($_POST['form-categoria'])){
    header('Location: ../index.php?pag=editArtigo&r=empty&id='.$_POST['form-id']);
    exit();
}
$id = $_POST['form-id'];
$titulo = $_POST['form-titulo'];
$descricao = $_POST['form-descricao'];
$desenvolvimento = $_POST['form-desenvolvimento'];
$categoria = $_POST['form-categoria'];
$visibility = $_POST['form-visibility'];


include('../../db/conn.php');

$sql = "UPDATE artigos SET titulo='$titulo', descricao='$descricao', desenvolvimento='$desenvolvimento', categoria_id=$categoria, visibility=$visibility WHERE id=$id";

if ($conn->query($sql) === TRUE) 
    header('Location: ../index.php?pag=artigo&r=editok');
else
    header('Location: ../index.php?pag=artigo&r=editerro');
$conn->close();
?>