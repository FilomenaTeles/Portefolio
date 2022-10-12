<?php

if(empty($_POST['form-id']) || empty($_POST['form-nome']) || empty($_POST['form-artigo']) || !isset($_POST['form-visibility'])){
    header('Location: ../index.php?pag=img&insert=empty');
    exit();
  }
  $id = $_POST['form-id'];
  $name = $_POST['form-nome'];
  $artigo_id= $_POST['form-artigo'];
  $visibility = $_POST['form-visibility'];
  $old_artigo= $_POST['form-old-artigo'];;


include('../../db/conn.php');

/**TODO:
 * VER SE ARTIGO FOI MUDADO
 * VER SE HA MAIS IMAGENS DO NOVO ARTIGO
 * MUDAR NOME ARTIGO
 * retirar ao contador artigo antigo
 * adicionar ao contador artigo novo
 */

 if($artigo_id != $old_artigo){
    //VAI AO ARTIGO ANTIGO E RETIRA 1 AO CONTADOR, TEM MENOS 1 IMAG
    $sql1 = "SELECT * FROM artigos WHERE id=$old_artigo";
    $result1 = $conn->query($sql1);
    $rowOld = $result1->fetch_assoc();
    $old_cont=$rowOld['contador'];
    $old_cont--;
    $sql2 = "UPDATE artigos SET contador='$old_cont' WHERE id=$old_artigo";
    $conn->query($sql2);
  

    //VAI AO ARTIGO NOVO E ADICIONA 1 AO CONTADOR, TEM MAIS 1 IMAG
    $sql3 = "SELECT * FROM artigos WHERE id=$old_artigo";
    $result3 = $conn->query($sql3);
    $rowNew = $result3->fetch_assoc();
    $new_cont=$rowNew['contador'];
    $new_cont++;
    $sql4 = "UPDATE artigos SET contador='$new_cont' WHERE id=$artigo_id";
    $conn->query($sql4);
    $new_cont--;
    $name="i_".$artigo_id."_".$new_cont.".png";
    rename("../img/i_".$old_artigo."_".$old_cont.".png","../img/".$name);

 }

$sql = "UPDATE imagens SET nome='$name', artigo_id='$artigo_id', visibility=$visibility WHERE id=$id";


if ($conn->query($sql) === TRUE) 
    header('Location: ../index.php?pag=img&r=editok');
else
    header('Location: ../index.php?pag=img&r=editerro');
$conn->close();
?>