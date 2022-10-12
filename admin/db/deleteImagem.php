<?php
session_start();
if(!isset($_SESSION['id'])){
    header('Location: ../index.php?p=404');
    exit();
}
$id=$_GET['id'];
$artigo_id=$_GET['artigoId'];
$nome=$_GET["nome"];

include('../../db/conn.php');


$target_file="../img/$nome";

$sql = "DELETE FROM imagens WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  unlink($target_file);
  //RETIRAR IMAGEM DO CONTADOR
  $sql2 = "SELECT * FROM artigos WHERE id=$artigo_id";
  $result2 = $conn->query($sql2);
  $rowNew = $result2->fetch_assoc();
  $new_cont=$rowNew['contador'];
  $new_cont--;
  $sql3 = "UPDATE artigos SET contador='$new_cont' WHERE id=$artigo_id";
  $conn->query($sql3);

    header('Location: ../index.php?pag=img&r=delok');
  } else {
    header('Location: ../index.php?pag=img&r=delerro');
  }

$conn->close();