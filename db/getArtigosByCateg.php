<?php
/*include('conn.php');*/

$sql = "SELECT * FROM artigos WHERE categoria_id=$cat AND visibility=1";
$result1 = $conn->query($sql);

if ($result1->num_rows > 0) {

?>
    

        <!--contador que vai alterar a classe active do carousel-->
       <?php $activeCont=1;
       $activeClass; ?>

        <div class="carousel-inner ">
            <?php
            while ($row1 = $result1->fetch_assoc()) {
                if($activeCont==1){
                    $activeClass="carousel-item active";
                     $activeCont++;
                }else{
                    $activeClass="carousel-item";
                }
            ?>

                <!--1º SLIDE-->
                <div class="<?=$activeClass?>">
                        <!--1º CARTÃO-->
                        <div class="card ">
                            <a href="index.php?pag=blog-art&artigo=<?= $row1['id'] ?>" class="card-btn">
                                <div class="image-wrapper">
                                    <?php
                                    $idArtigo=$row1['id'];
                                    include('getImagensCards.php');
                                    ?>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title"><?= $row1['titulo'] ?></h5>
                                    <p class="card-text"><?= $row1['descricao'] ?></p>
                                    <a href="index.php?pag=blog-art&artigo=<?= $row1['id'] ?>" class="btn">Ler</a>
                                </div>
                            </a>
                        </div>
                    
                </div>
     
<?php
               

            } ?>
              </div>
              <br>
    
     <?php   }
