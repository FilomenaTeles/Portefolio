<?php

if(!isset($_SESSION['id'])){
    header('Location: ../index.php?p=404');
    exit();
}


$sql1 = "SELECT * FROM artigos WHERE id=$id";
$result1 = $conn->query($sql1);

$rowCatid = $result1->fetch_assoc();
$Catid=$rowCatid["categoria_id"];


if ($result1->num_rows != 1) {
    header('Location: ../index.php?pag=404&r=2');
    exit();
}

