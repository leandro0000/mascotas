<?php 


ob_start();

session_start();

include ('php/conexion.php');

 if (isset($_SESSION['carrito'])){

    if (isset($_GET['id'])){
    $arreglo=$_SESSION['carrito'];
    $encontro=false;
    $numero = 0;
     
    for ($i=0; $i < count($arreglo); $i++) { 
        if ($arreglo[$i] == $_GET['id']){
            $encontro = true;
            $numero = [$i];

        }
      
    }
    if ($encontro == true){
        $arreglo[$numero]['cantida']=$arreglo[$numero]['cantida']+1;
        $_SESSION['carrito']=$arreglo;

    }else{

        $nombre = "";
        $precio = "";
        $imagen = "";

       $sql = $conn ->query('SELECT  * FROM productos WHERE id='.$_GET['id'])or die($conn -> error);
        
        $row = mysqli_fetch_row($sql);

        $nombre = $row[5];
        $precio = $row[6];
        $imagen = $row[4];
     
        $arreglo1 = array('id' =>$_GET['id'],'nombre' =>$nombre,'precio' =>$precio,'imagen'=>$imagen);

        array_push($arreglo,$arreglo1);
        $_SESSION['carrito']=$arreglo;


    }
     
    }


 }else {
 
    if (isset($_GET['id'])){
        
        $nombre = "";
        $precio = "";
        $imagen = "";

       $sql = $conn ->query('SELECT  * FROM productos WHERE id='.$_GET['id'])or die($conn -> error);
        
        $row = mysqli_fetch_row($sql);

        $nombre = $row[5];
        $precio = $row[6];
        $imagen = $row[4];
     
        $arreglo[] = array('id' =>$_GET['id'],'nombre' =>$nombre,'precio' =>$precio,'imagen'=>$imagen);
        $_SESSION['carrito']=$arreglo;

    }


 }







?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity=
	"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="css/custom.css">
   <link rel="stylesheet" type="text/css" href="css/estilos.css">
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
	<script type="text/javascript" src="js/evento.js"></script>
</head>
<body> 


<div class="">
		
        <div class="inicio_pro">
            <div class="blo_pro">
                <ul>
                   <li><a href="#"> <span class="">telefono</span> + 314 561 9800</a></li>
                   <li><a href="#"> <span class="">correo</span> + leandro.red@hotmail.es</a></li>
                </ul>
               
            </div>
                <div class="blo_pro1">
                    <ul>
                       <li><a href="#" class="">facebook</a></li>
                       <li><a href="#" class="">tiwder</a></li>
                       <li><a href="#" class="">int</a></li>
                       <li><a href="#" class="">google</a></li>
                    </ul>
       
                </div>      
           </div>
          <div class="inicio_2">
           <div class="blo_pro2">
               <ul>
                   <li><img src="img/logo.png" alt=""></li>
               </ul>
           </div>
       
            <div class="menu">
                <nav class="menu1">
                    <ul>
                        <li><a href="#">Account</a></li>
                        <li><a href="#">Wishlist</a></li>
                        <li><a href="#">Checkout</a></li>
                        <li> <img src="img/car.png" alt=""><a href="#">Cart (0)</a></li>
                        <li><a class="per" href="#">Login</a></li>				 
                    </ul>
                </nav>
            </div>
           <br>
       
           <div class="blo_login">
               <form id="registro" class="from">
                   <h2 class="ti_pro">estas registrado? <span>registrate aqui</span></h2>
                   <input class="login" type="text" placeholder="nombre" id="n1">
                   <input class="login" type="email" placeholder="correo" id="n2">
                   <input  class="login" type="password" placeholder="contraseña" id="n3">
                   <input class="evento" type="submit" value="registro">
               </form>
       
               <form id="login" class="from">
                   <h2 class="ti_pro">inicio de cession</h2>
                   <input class="login" type="email" placeholder="correo">
                   <input class="login" type="password" placeholder="correo">
                   <input class="evento" type="submit" value="entar">
       
                    
       
               </form>
       
           </div>
       
          </div>

           <div class="table">
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">img</th>
                    <th scope="col">nombre</th>
                    <th scope="col">precio</th>
                  </tr>
                </thead>
                <tbody>
                  
                <?php if (isset($_SESSION['carrito'])) {
                    $arraycarrito= $_SESSION['carrito'];

                    for ($i=0; $i <count($arraycarrito);$i++) {
                          
                                              ?>                 
                  <tr>
                    <th scope="row">1</th>
                    <td><img style="width: 150px" src="<?php echo $arraycarrito[$i]['imagen'] ?>" alt=""></td>
                    <td><p><?php echo $arraycarrito[$i]['nombre'] ?></p></td>
                    <td><h3><?php echo $arraycarrito[$i]['precio'] ?></h3></td>
                  </tr>

                  <?php  } } ?>

               
                  
                </tbody>
              </table>

           </div>


  
    
</body>
</html>