<?php

if(!isset($_SESSION['id'])){
    header('Location: ../index.php?p=404');
    exit();
}

include('../db/conn.php');

$sql = "SELECT * FROM imagens ORDER by artigo_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
  while($row = $result->fetch_assoc()) {
    $id=$row['artigo_id'];
    include('getCategoriaByIDArtigo.php');
    ?>
        <tr>
            <td>
                <a href="index.php?pag=editImagem&id=<?=$row["id"]?>&categoriaId=<?=$Catid?>"><i class="fa-solid fa-pen-to-square"></i></a>
                <a href="db/deleteImagem.php?id=<?=$row["id"]?>&artigoId=<?=$row["artigo_id"]?>&nome=<?=$row["nome"]?>"><i class="fa-solid fa-trash-can"></i></a>
            </td>
            <td><?=$row['id']?></td>
            <td><?=$row['nome']?></td>
            <td>
                <?php 
                
                if($row['nome']==''){
                    ?>
                    Sem imagem
                    <?php
                }?>
            <img class="w-25 admin-imag" src="img/<?= $row['nome']?>" alt="">
          
            </td>
            <td><?=$row['artigo_id']?></td>
            <td>
                <?php if($row['visibility']==1) { ?>
                    <a href="db/updateImagensVisibility.php?v=0&id=<?=$row['id']?>"><i class="bi bi-eye-fill"></i></a>
                <?php } else { ?>
                    <a href="db/updateImagensVisibility.php?v=1&id=<?=$row['id']?>"><i class="bi bi-eye-slash-fill"></i></a>
                <?php } ?>
            </td>
        </tr>
        
    <?php
  }
}
$conn->close();
?>