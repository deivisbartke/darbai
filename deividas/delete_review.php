<?php 
include_once('connection.php');
$id = $_POST['id'];

$mySql = "DELETE FROM komentarai WHERE id=$id ";
$result = mysqli_query($connection, $mySql);


echo 1;
?>