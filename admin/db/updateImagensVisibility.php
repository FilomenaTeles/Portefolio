<?php
if(!isset($_GET['id']) || !isset($_GET['v'])){
    header('Location: ../index.php?p=administration&r=empty');
    exit();
}
$id = $_GET['id'];
$v = $_GET['v'];


include('../../db/conn.php');

$sql = "UPDATE imagens SET visibility=$v WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header('Location: ../index.php?pag=img&r=ok');
}
else
    header('Location: ../index.php?pag=img&r=error');
$conn->close();
?>