<?php
session_start();

include_once('connection.php');

if(isset($_POST['review'], $_POST['name'])) {




  $vardas = $_POST['name'];
  $vardas = mysqli_real_escape_string($connection, $vardas);
  $tekstas = $_POST['review'];
  $tekstas = mysqli_real_escape_string($connection,$tekstas);
  $data = date('Y/m/d');


  if (isset($_POST['button-send'])) {
    $mySql = "INSERT INTO komentarai VALUES('', '$vardas' , '$tekstas', '$data')";
    $result = mysqli_query($connection, $mySql);
  }
}


 ?>
