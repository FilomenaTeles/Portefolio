<?php

if(!isset($_SESSION['id'])){
    header('Location: ../index.php?p=404');
    exit();
}

include('../db/conn.php');

$sql = "SELECT * FROM artigos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      
      ?><tr>
         <td>
            <a href="index.php?pag=editArtigo&id=<?=$row["id"]?>"><i class="fa-solid fa-eye"></i></a>
            <a href="db/deleteArtigo.php?id=<?=$row["id"]?>"><i class="fa-solid fa-trash-can"></i></a>
          </td>
      <th scope="row"><?php echo$row["id"]?></th>
      <td><?php echo$row["titulo"]?></td>
      <td><?php echo$row["categoria_id"]?></td>
      <td><?= mb_strimwidth($row["descricao"], 0, 50, "...")?></td>
      <td><?= mb_strimwidth($row["desenvolvimento"], 0, 50, "...")?></td>
      <td><?php echo$row["data"]?></td>
      <td>
          <?php if($row['visibility']==1) { ?>
          <a href="db/updateArtigoVisibility.php?v=0&id=<?=$row['id']?>"><i class="bi bi-eye-fill"></i></a>
          <?php } else { ?>
          <a href="db/updateArtigoVisibility.php?v=1&id=<?=$row['id']?>"><i class="bi bi-eye-slash-fill"></i></a>
          <?php } ?>
        </td>
    </tr>

      <?php
    }
}

$conn->close();