<?php
if(!isset($_SESSION['id'])){
    header('Location: ../index.php?p=404');
    exit();
}


include('../db/conn.php');

$sql = "SELECT * FROM categorias";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
  while($row = $result->fetch_assoc()) {
    
    if($row['visibility']==1){
      
    ?>
       <option <?php if(!empty($catg) && $catg==$row['id']){?> selected <?php } ?> value="<?=$row['id']?>"><?=$row['name']?></option>
    <?php 
    } else{
        ?>
       <option <?php if(!empty($catg) && $catg==$row['id']){?> selected <?php } ?> value="<?=$row['id']?>"><?=$row['name']?> <small>(categoria oculta)</small></option>
    <?php 
    }
    
  }
}
$conn->close();
?>