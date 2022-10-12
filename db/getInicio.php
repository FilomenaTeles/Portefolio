<?php

include('conn.php');

$sql="SELECT * FROM inicio";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    ?>
    <h3><?=$row['titulo']?></h3>
    <p><?=$row['p_1']?></p>
    <p><?=$row['p_2']?></p>
    <?php
}

$conn->close();