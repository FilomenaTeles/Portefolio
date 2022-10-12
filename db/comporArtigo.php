<?php


include('conn.php');

$sql = "SELECT * FROM artigos WHERE id=$artigo";
$result = $conn->query($sql);

$rowArtigo = $result->fetch_assoc();


if ($result->num_rows != 1) {
    header('Location: ../index.php?pag=404');
    exit();
}

?>
    <h4 class="text-center"><?= $rowArtigo['titulo']?></h4>
    <?php
    if($row['titulo']=2){   //SO TEM 1 IMAGEM
        
        ?>
        <div class="container-fluid p-3 w-50 h-50">
            <?php 
            $idArtigo=$artigo;
            include('getImagens.php');
            ?>
        </div>
        <div class="container-fluid p-3 text-center">
            <?=$rowArtigo['desenvolvimento'] ?>
        </div>
        <div class="container-fluid p-3 text-end">
            <small><?=$rowArtigo['data'] ?></small>
        </div>
        <?php
    }

$conn->close();