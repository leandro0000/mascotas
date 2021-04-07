<?php 

include "php/conexion.php";




 if (isset($_GET['id'])){

 $sql= $conn->query("SELECT * FROM productos WHERE id=".$_GET['id'])or die($conn -> error);

  if (mysqli_num_rows($sql) >0){

	$row = mysqli_fetch_row($sql);
	
  }
  
   

 }



?>


<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

     


    <div class="container bg-danger mt-50">
        <h2>actulizar registros</h2>
        <form id="update" method="post" action="php/update.php" enctype="multipart/form-data"> 
            <input type="hidden" placeholder="id" class="form-control d-block mt-2" name="id" value="<?php echo $row[0]?>" ></input>
            <input type="text" placeholder="nombre" class="form-control d-block mt-2" name="nombre" value="<?php echo $row[5]?> "></input>
            <input type="text" placeholder="precio " class="form-control d-block mt-2 " name="precio" value="<?php echo $row[6]?>" ></input>
            <input type="text" placeholder="descripcion" class="form-control d-block mt-2" name="descripcion" value="<?php echo $row[7]?>" ></input>
            <input type="file"  class="from-control d-block mt-2 " name="image" value="<?php echo $row[1]?>"></input>
            <input type="file"  class="from-control d-block mt-2" name="imagen" value="<?php echo $row[2]?>"></input>
            <input type="file"  class="from-control d-block mt-2 " name="ima" value="<?php echo $row[3]?>"></input>
            <input type="file"  class="from-control d-block mt-2" name="ima1" value="<?php echo $row[4]?>"></input>
            <input type="submit" value="enviar" class="btn btn-info mt-2">
        </form>
    </div>

    




</body>

</html>