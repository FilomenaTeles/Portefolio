<?php
if(!isset($_SESSION['id'])){
    header('Location: ../index.php?p=404');
    exit();
}


include('../db/conn.php');

$sql = "SELECT * FROM artigos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
  while($row = $result->fetch_assoc()) {
    
    if($row['visibility']==1){
      
    ?>
       <option <?php if(!empty($artigo) && $artigo==$row['id']){?> selected <?php } ?> value="<?=$row['id']?>"><?=$row['titulo']?></option>
    <?php 
    } else{
        ?>
       <option <?php if(!empty($artigo) && $artigo==$row['id']){?> selected <?php } ?> value="<?=$row['id']?>"><?=$row['titulo']?> <small>(artigo oculto)</small></option>
    <?php 
    }
    
  }
}
$conn->close();
?>