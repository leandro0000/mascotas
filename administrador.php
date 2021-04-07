<?php 
  
session_start();

    @$ses =   $_SESSION['correo'];

     if ($ses =="" || $ses == null ){

        echo "debes iniciar session";
        die();


     }

     

?>

<?php 

include "php/conexion.php";

$sql= $conn ->query("SELECT * FROM productos")or die($conn -> error);

?>

<?php 

include "php/conexion.php";
 
 @$buscar=$_POST['buscar'];
 
$bus= $conn->query("SELECT * FROM productos WHERE id='$buscar' or nombre='$buscar' ")or die($conn -> error);

if (isset($sql)){
    $row=mysqli_fetch_array($bus);
}
   

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
    <script type="text/javascript" src="js/evento.js"></script>

</head>

<body>
    <div class="admi">

        <h2>hola usuario
            <?php echo $_SESSION['correo']; ?>
        </h2>
        <a href="php/serrar.php"><span class="btn btn-warning">Cerrar session</span></a>
        <a href="https://fnmappfek.000webhostapp.com/index.php"><span class="btn btn-warning">volver</span></a>


    </div>
    <div class="buscar">
        <form method="post" action="administrador.php">
            <input type="text" placeholder="buscar id" name="buscar" class="inpu">
            <input type="submit" value="buscar" class="btn btn-danger">
        </form>
        <div class="img_bus">
            <img style="width: 100px;" src="<?php echo $row['img'] ?>" alt="">
            <h2>
                <?php echo $row['nombre'] ?>
            </h2>

        </div>

    </div>
    <br>
    <br>


    <div>
        <div class="productos">
            <div>
                <h3>agregar producto</h3>
            </div>
            <form id="update" method="POST" action="php/file.php" enctype="multipart/form-data">
                <input type="text" placeholder="nombre" name="nombre">
                <input type="text" placeholder="precio" name="precio">
                <input type="text" placeholder="descricion" name="descricion">
                <input type="hidden" placeholder="id" id="d0">
                <input type="file" name="imagen" placeholder="nombre" class="input-cc" />
                <input type="file" name="ima" placeholder="precio" class="input-cc" />
                <input type="file" name="ima1" placeholder="descripcion" class="input-cc">
                <input type="file" multiple id="d4" class="input-cc" name="image">
                <input type="submit" value="enviar" class="btn btn-danger">
            </form>


        </div>
        <div class="for2">



        </div>

    </div>
    <div class="pro">
        <div class="table_pro">
            <table class="table table-responsive table-bordered">
                <thead>

                    <tr>
                        <th>id</th>
                        <th>imagen</th>
                        <th>imagen1</th>
                        <th>imangen2</th>
                        <th>imagen3</th>
                        <th>nombre</th>
                        <th>precio</th>
                        <th>descripcion</th>
                        <th>eliminar</th>

                    </tr>
                </thead>
                <tbody>
                    <?php while($row=mysqli_fetch_array($sql)){
             

             

             ?>
                    <tr>
                        <td>
                            <h3>
                                <?php echo $row['id'] ?>
                            </h3>
                        </td>
                        <td><img src=" <?php echo $row['img'] ?>" alt="" style="width: 100px;"></td>
                        <td> <img src="<?php echo $row['imagen1'] ?>" alt="" style="width: 100px"> </td>
                        <td><img src="<?php echo $row['imagen2'] ?>" alt="" style="width: 100px"></td>
                        <td><img src="<?php echo $row['imagen3'] ?>" alt="" style="width: 100px"></td>
                        <td>
                            <h3>
                                <?php echo $row['nombre'] ?>
                            </h3>
                        </td>
                        <td>
                            <h3>
                                <?php echo $row['precio'] ?>
                            </h3>
                        </td>
                        <td>
                            <h3>
                                <?php echo $row['descripcion'] ?>
                        </td>
                        <td><a onclick="eliminar (<?php echo $row['id'] ?>)" class="btn btn-danger btn-sm">eliminar</a></td>
                        <td><a href="update.php?id=<?php echo $row['id'] ?>" class="btn btn-danger btn-sm">editar</a></td>
                    </tr>
                    <?php  } ?>

                </tbody>
            </table>


        </div>
    </div>

    <script>
        function eliminar(fila) {
            var confirmar = confirm("esta seguro de eliminar este archivo");

            if (confirmar == true) {
                alert("registro eliminado");
            } else {
                return false;
            }

            $.ajax({
                data: {
                    fila: fila
                },
                type: 'post',
                url: 'php/eliminar.php',
                success: function(response) {
                    location.reload();
                }

            });

        }
    </script>


    




</body>

</html>