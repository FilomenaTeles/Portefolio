<?php
session_start();
if(!isset($_SESSION['id'])){
    header('Location: ../index.php?pag=404');
    exit();
}

if(empty($_FILES["form-photo"]["tmp_name"]) || empty($_POST['form-artigo']) || !isset($_POST['form-visibility'])){
  header('Location: ../index.php?pag=categorias&insert=empty');
  exit();
}

$artigo_id= $_POST['form-artigo'];
$visibility = $_POST['form-visibility'];


include('../../db/conn.php');

$sql1="SELECT * FROM artigos WHERE id=$artigo_id";
$result = $conn->query($sql1);
$row = $result->fetch_assoc();
$contador=$row['contador'];

/* FAZER IF PARA VER JE JÁ EXISTE UMA FOTO ASSOCIADA
SE EXISTIR DAR O NOME DE A.ID.CONTADOR.PNG 
INSERIR ATRIBUTO CONTADOR NA TABELA IMAGEM*/
if($contador>1){
    $name = "i_".$artigo_id."_".$contador.".png";
}else{
    $name = "i_".$artigo_id.".png";
}


$sql = "INSERT INTO imagens (nome, artigo_id, visibility)
VALUES ('$name', '$artigo_id', $visibility)";



if ($conn->query($sql) === TRUE) {
    include('uploadImagem.php');

    $contador++;
    $sql2 = "UPDATE artigos SET contador='$contador' WHERE id=$artigo_id";
    $conn->query($sql2);

    header('Location: ../index.php?pag=img&r=insertok');
}
else
    header('Location: ../index.php?pag=img&r=inserterro');
?>