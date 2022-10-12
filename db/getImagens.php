<?php
$sql2 ="SELECT * FROM imagens WHERE artigo_id=$idArtigo AND visibility=1";
$result2 = $conn->query($sql2);

                                    
if ($result2->num_rows == 1) {
    $row = $result2->fetch_assoc();
    ?>
    <img src="admin/img/<?=$row['nome'] ?>" class="card-img-top " alt="">
    <?php }
    elseif($result2->num_rows > 1){
        ?>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
       
            <div class="carousel-inner">
        <?php
        $cont=1;
        while( $row = $result2->fetch_assoc()){
            ?>
                  
                    <div class="carousel-item<?php if($cont==1){echo " active"; $cont++;}?>">
                      <img src="admin/img/<?=$row['nome'] ?>" class="d-block img-crop" alt="...">
                    </div>
                     
            
            <?php
        }
        ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
        </div>
        <?php

    }
    else{?>

        <img src="admin/img/default.png" class="card-img-top" alt="default image">
    <?php
 } 