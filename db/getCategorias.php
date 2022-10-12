<?php
include('conn.php');

$sql = "SELECT * FROM categorias WHERE visibility=1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   
  
    while($row = $result->fetch_assoc()) {
       ?>
        <h6><i class="fa-solid <?= $row['icon_name']?> fa-2xl"></i> <?= strtoupper($row['name'])  ?></h6>
       <?php
       $catid=$row['id'];
       $cat=$row['id'];
       ?>
       <div id="carousel<?=$cat?>" class="carousel slide" data-bs-touch="false">

         <button class="carousel-control position-control" type="button" data-bs-target="#carousel<?=$cat?>" data-bs-slide="prev">
             <span class="carousel-control-prev-icon" aria-hidden="true"></span>
             <span class="visually-hidden">Previous</span>
         </button>
         <button class="carousel-control position-control" type="button" data-bs-target="#carousel<?=$cat?>" data-bs-slide="next">
             <span class="carousel-control-next-icon" aria-hidden="true"></span>
             <span class="visually-hidden">Next</span>
         </button>

      
         <?php
        include('db/getArtigosByCateg.php');?>

        </div>
<?php
    } 
}
