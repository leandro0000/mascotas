<?php 



include "conexion.php";

$fila=$_POST['fila'];

$sql=mysqli_query($conn,"DELETE FROM productos WHERE id='$fila'");




?>