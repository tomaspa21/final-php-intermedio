<?php
session_start();
include("conexion.php");
$codigo_captcha = $_POST['captcha'];
if ($codigo_captcha == $_SESSION['codigo_captcha']) {
  $nombre_ped = $_POST ['nombre']; 
  $principal_ped = $_POST ['principals'];
  $postre_ped = $_POST ['postres'];
  $estado_ped = $_POST ['estado']; 
  mysqli_query($conexion_db, "INSERT INTO pedidos VALUES (DEFAULT, '$nombre_ped', '$principal_ped', '$postre_ped','$estado_ped')");
  header("Location:cargar.php?ok");
  mysqli_close($conexion_db);
}else {
  header("Location:cargar.php?error_codigo"); 
}
?>


