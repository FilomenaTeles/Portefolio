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
    ?>
        <tr>
            <td>
                <a href="index.php?pag=editCategoria&id=<?=$row["id"]?>"><i class="fa-solid fa-pen-to-square"></i></a>
                <a href="db/deleteCategoria.php?id=<?=$row["id"]?>"><i class="fa-solid fa-trash-can"></i></a>
            </td>
            <td><?=$row['id']?></td>
            <td><?=$row['name']?></td>
            <td><?=$row['icon_name']?></td>
            <td>
                <?php if($row['visibility']==1) { ?>
                    <a href="db/updateCategoriasVisibility.php?v=0&id=<?=$row['id']?>"><i class="bi bi-eye-fill"></i></a>
                <?php } else { ?>
                    <a href="db/updateCategoriasVisibility.php?v=1&id=<?=$row['id']?>"><i class="bi bi-eye-slash-fill"></i></a>
                <?php } ?>
            </td>
        </tr>
        
    <?php
  }
}
$conn->close();
?>