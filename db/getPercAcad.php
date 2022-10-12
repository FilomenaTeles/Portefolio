<?php

include('conn.php');

$sql="SELECT * FROM perc_academico";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    ?>
    <h4><?=$row['titulo']?></h4>
    <p><?=$row['texto']?></p>
    <?php
}

$conn->close();