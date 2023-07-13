<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:index.php");
}elseif ($_SESSION['rol']==2) {
	header("Location:index2.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Productos</title>
    <meta author="William Alejandro Castro">
    <meta description="Encuentra la oportunidad de mercar desde la comodidad de tu hogar en un sitio real y seguro ubicado en Bogotá, bienvenido a Supermercado imperial, te ofrecemos gran variedad">
    <meta keywords="Supermercado, Imperial, Bogotá">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style_productos.css">
</head>

<body>
     
         <?php 
            include("header-usuario.php");
            include("nav_superadmin.php");
            $conexion=mysqli_connect("db764611846.hosting-data.io","dbo764611846","GeralCamiloAlejo2022*","db764611846");
         ?>
         
            <div class="container">
               <div class="row">
                   <table class="table table-borderless text-center mt-5 mb-5 col-10 col-md-6 borde-naranja">
                       <thead>
                            <tr class="berlin blanco fondo-naranja borde-naranja">
                              <td>PRODUCTOS</td>
                              <td>DESCRIPCIÓN</td> 
                              <td>PRECIO</td>
                            </tr> 
                       </thead>
                       
                       
                       <tbody>
                            <?php 
                            $sql="SELECT * from pedido";
                            $result=mysqli_query($conexion,$sql);
                            $suma_total = 0;
                            while($mostrar=mysqli_fetch_array($result))
                            {
                            ?>

                            <tr class="azul">
                              <td><img src="<?php echo $mostrar['imagen'] ?>" width="100px"></td>
                              <td><?php echo $mostrar['descripcion'] ?></td>
                              <td>$<?php echo $mostrar['precio'] ?></td>
                            </tr>

                            <tr class="fondo-amarillo azul">
                              <?php  $suma_total = $suma_total + $mostrar['precio'];?>
                              <td colspan="3" class="text-right">TOTAL: <span class="naranja">$</span><?php echo $suma_total ?></td>
                            </tr>
                            <?php   
                            }
                            ?>
                       </tbody>
                   </table>
               </div>
               
               <div class="row">
                   <table class="table table-borderless text-center mt-5 mb-5 col-10 col-md-6 borde-naranja">
                       <thead>
                            <tr class="berlin blanco fondo-naranja borde-naranja">
                              <td>DIRECCIÓN</td>
                              <td>CELULAR</td> 
                              <td>MENSAJE</td>
                              <td>TOTAL</td>
                            </tr>
                       </thead>
                       
                       
                       <tbody>
                            <?php 
                                $sql="SELECT * from confirmacion";
                                $result=mysqli_query($conexion,$sql);

                                while($mostrar=mysqli_fetch_array($result)){
                            ?>

                            <tr class="azul">
                              <td><?php echo $mostrar['direccion'] ?></td>
                              <td><?php echo $mostrar['celular'] ?></td>
                              <td><?php echo $mostrar['mensaje'] ?></td>
                              <td><?php echo $mostrar['total'] ?></td>
                            </tr>

                            <?php   
                            }
                            ?>
                       </tbody>
                   </table>
               </div>
               
             </div>

<?php 
    include("footer-usuario.php");
?>