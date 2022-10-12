<?php
$sql2 ="SELECT * FROM imagens WHERE artigo_id=$idArtigo AND visibility=1";
$result2 = $conn->query($sql2);

                                    
if ($result2->num_rows >= 1) {
    $row = $result2->fetch_assoc();
    ?>
    <img src="admin/img/<?=$row['nome'] ?>" class="card-img-top " alt="">
    <?php }
    
    else{?>

        <img src="admin/img/default.png" class="card-img-top" alt="default image">
    <?php
 } 