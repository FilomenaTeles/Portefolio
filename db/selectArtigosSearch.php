<?php

include('conn.php');

if(empty($_GET['search'])){
    header('Location:../index.php?pag=blog&r=empty');
    exit();
}
$param = $_GET['search'];
$tamanho=strlen($param);
$sql = "SELECT * FROM artigos WHERE visibility=1 AND (titulo LIKE '%$param%' OR descricao LIKE '%$param%' OR desenvolvimento LIKE '%$param%')";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    ?>
    <div class="container text-end pt-3">
        <a href="index.php?pag=blog" class="btn">Limpar pesquisa</a>
    </div>
    <?php
    
  while($rowArt = $result->fetch_assoc()) {
    ?><div class="col">
        <div class="card" style="width: 18rem;">
        <?php 
        $idArtigo=$rowArt['id'];
        include('getImagens.php') ?>

            <div class="card-body">
                <h5 class="card-title"><?=$rowArt['titulo']?></h5>
                <p class="card-text"><?=$rowArt['descricao']?></p>
                <a href="index.php?pag=blog-art&artigo=<?= $rowArt['id'] ?>" class="btn">Ler</a>
            </div>
        </div>
    </div>
    <?php
  }
}else {?>
     <div class="container text-end pt-3">
        <a href="index.php?pag=blog" class="btn">Limpar pesquisa</a>
    </div>

    <h2>Artigo não encontrado</h2><?php
}
 
$conn->close();
?>
