<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>terminar domicilio</title>
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
            include("nav.php");
            $conexion=mysqli_connect('localhost','root','','reservaciones');
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
                              <?php $suma_total = $suma_total + $mostrar['precio'];?>
                              <td colspan="3" class="text-right">TOTAL: <span class="naranja">$</span><?php echo $suma_total ?></td>
                            </tr>
                            <?php   
                            }
                            ?>    
                       </tbody>
                   </table>
               </div>
               
              <div class="row">
                    <img src="img/gif.gif" class="mt-3 mb-3" height="200px">
              </div>

              <div class="row text-center">
                  <form action="" method="post"  class="col-10 col-md-8">
                    <div class="form-group">
                        <input type="text" name="direccion" placeholder="Dirección" class="form-control borde-amarillo">
                    </div>
                    <div class="form-group">
                        <input type="text" name="celular" placeholder="Nº de contacto" class="form-control borde-amarillo">
                    </div>
                    <div class="form-group">
                        <input type="text" name="total" value="<?php echo '$' . $suma_total ?>" readonly="readonly" class="form-control borde-azul">
                    </div>
                    <div class="form-group">
                        <input type="text" name="mensaje" placeholder="Torre y Apartamento" class="form-control borde-naranja">
                    </div>
                    
                    <button type="submit" name="submit" class="btn boton-a mt-3 fondo-naranja blanco">Confirmar pedido</button>
                  </form>
              </div>

         </div>


                <?php
                    if(isset($_POST['submit'])){
                      require("confirmar_pedido.php");
                    }
                ?>


<?php 
    include("footer-usuario.php");
?>