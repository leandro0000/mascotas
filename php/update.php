<?php 

include "conexion.php";

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$precio=$_POST['precio'];
$descripcion=$_POST['descripcion'];




        @$enviar=PATHINFO($_FILES["image"]["name"]);
        @$nuevo=$enviar['filename'] ."_". time() . "." . $enviar['extension'];
        move_uploaded_file($_FILES["image"]["tmp_name"],"../upload/" . $nuevo);
        @$location="upload/" . $nuevo;

        $envia=PATHINFO($_FILES["imagen"]["name"]);
        $nuev=$envia['filename'] ."_". time() . "." . $envia['extension'];
        move_uploaded_file($_FILES["imagen"]["tmp_name"],"../upload/" . $nuev);
        $ruta="upload/" . $nuev;

        $envi1=PATHINFO($_FILES["ima"]["name"]);
        $nuev1=$envi1['filename'] ."_". time() . "." . $envi1['extension'];
        move_uploaded_file($_FILES["ima"]["tmp_name"],"../upload/" . $nuev1);
        $ruta1="upload/" . $nuev1;

        $envia1=PATHINFO($_FILES["ima1"]["name"]);
        $nue1=$envia1['filename'] ."_". time() . "." . $envia1['extension'];
        move_uploaded_file($_FILES["ima1"]["tmp_name"],"../upload/" . $nue1);
        $ruta2="upload/" . $nue1;
          
          


 $sql= mysqli_query($conn,"UPDATE  productos SET nombre='$nombre', precio='$precio',descripcion='$descripcion',imagen1='$location',imagen2='$ruta',imagen3='$ruta1',img='$ruta2'  WHERE id='$id'");

  if ($sql == true){
      echo "registro actulizado";
      header("location:./../administrador.php");
  }else {

    echo "error al actulizar".mysqli_error($conn);
  }
  mysqli_close($conn);


?>