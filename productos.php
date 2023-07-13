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
            include("header.php");
         ?>
         
        <main>
           
           <div class="row mt-5 secciones" style="background: #f82e00;">
                  <div class="container text-center">
                      <ul>
                        <li class="d-inline-block berlin col-xs-12 col-md-4 col-lg-2" ><a href="#lacteos" class="pt-3 pb-3" >LACTEOS</a></li>
                        <li class="d-inline-block berlin col-xs-12 col-md-4 col-lg-2"><a href="#fruver" class="pt-3 pb-3" >FRUTAS Y VERDURAS</a></li>
                        <li class="d-inline-block berlin col-xs-12 col-md-4 col-lg-3"><a href="#bebidas" class="pt-3 pb-3" >BEBIDAS</a></li>
                        <li class="d-inline-block berlin col-xs-12 col-md-4 col-lg-2"><a href="#granos" class="pt-3 pb-3" >GRANOS</a></li>
                      </ul>
                  </div>
            </div>
                 
            <div class="container">
                 <section class="mt-5 mb-5" id="lacteos">
                 
                    <div class="row">
                        <div class="col-12">
                             <p style="background-image: url(img/barra_p.png);background-repeat:no-repeat; background-size: contain; color:white; padding: 10px; text-align: left">LACTEOS</p>
                        </div>
                    </div>
                        
                    <div class="row  text-center">
                      <div class="col-10 col-md-3 borde-amarillo mt-2 mb-2" style="border-radius: 10px;">
                        <?php
                            $conexion = mysqli_connect("db764611746.hosting-data.io", "dbo764611746", "GeralCamiloAlejo2021*", "db764611746");
                            
                            $result = mysqli_query($conexion, "SELECT * FROM alqueria WHERE tipo = 'lacteos2'");
                                while ($row = mysqli_fetch_array($result))
                                {
                                    echo "<form action='registro_pedido.php'method='post'>";
                                    echo "<img src='".$row["imagen"]."' width='100%' class='img-producto mt-3 mb-3'>";
                                    echo "<p class='azul mb-0'>$ ".$row['precio']."</p>";
                                    echo "<input name='imagen' value='".$row["imagen"]."' readonly='readonly' style='display: none'></input>";
                                    echo "<input name='precio' value='".$row["precio"]."' readonly='readonly' style='display: none'></input>";
                                    echo "<input name='descripcion' value='".$row["descripcion"]."' readonly='readonly' style='display: none'></input>";
                                    echo "<p class='naranja'>".$row['descripcion']."</p>";
                                    echo "</form>";
                                }
                          ?>
                        </div>
                        
                        <div class="col-10 col-md-3 borde-amarillo mt-2 mb-2" style="border-radius: 10px;">

                        <?php

                            
                            $result = mysqli_query($conexion, "SELECT * FROM deslactosada WHERE tipo = 'lacteos1'");
                                while ($row = mysqli_fetch_array($result))
                                {
                                    echo "<form action='registro_pedido.php'method='post'>";
                                    echo "<img src='".$row["imagen"]."' width='100%' class='img-producto mt-3 mb-3'>";
                                    echo "<p class='azul mb-0'>$ ".$row['precio']."</p>";
                                    echo "<input name='imagen' value='".$row["imagen"]."' readonly='readonly' style='display: none'></input>";
                                    echo "<input name='precio' value='".$row["precio"]."' readonly='readonly' style='display: none'></input>";
                                    echo "<input name='descripcion' value='".$row["descripcion"]."' readonly='readonly' style='display: none'></input>";
                                    echo "<p class='naranja'>".$row['descripcion']."</p>";
                                    echo "</form>";
                                }
                          ?>
                        </div>
                        
                        <div class="col-10 col-md-3 borde-amarillo mt-2 mb-2" style="border-radius: 10px;">
                        <?php

                            
                            $result = mysqli_query($conexion, "SELECT * FROM leche WHERE tipo = 'lacteos4'");
                                while ($row = mysqli_fetch_array($result))
                                {
                                    echo "<form action='registro_pedido.php'method='post'>";
                                    echo "<img src='".$row["imagen"]."' width='100%' class='img-producto mt-3 mb-3'>";
                                    echo "<p class='azul mb-0'>$ ".$row['precio']."</p>";
                                    echo "<input name='imagen' value='".$row["imagen"]."' readonly='readonly' style='display: none'></input>";
                                    echo "<input name='precio' value='".$row["precio"]."' readonly='readonly' style='display: none'></input>";
                                    echo "<input name='descripcion' value='".$row["descripcion"]."' readonly='readonly' style='display: none'></input>";
                                    echo "<p class='naranja'>".$row['descripcion']."</p>";
                                    echo "</form>";
                                }
                          ?>
                        </div>
                          
                      </div>
                </section>
                
                <section class="mt-5 mb-5" id="fruver">
                 
                    <div class="row">
                        <div class="col-12">
                             <p style="background-image: url(img/barra_p.png);background-repeat:no-repeat; background-size: contain; color:white; padding: 10px; text-align: left">FRUTAS Y VERDURAS</p>
                        </div>
                    </div>
                        
                    <div class="row  text-center">
                      <div class="col-10 col-md-3 borde-amarillo mt-2 mb-2" style="border-radius: 10px;">
                        <?php
                            $conexion = mysqli_connect("db764611746.hosting-data.io", "dbo764611746", "GeralCamiloAlejo2021*", "db764611746");
                            
                            $result = mysqli_query($conexion, "SELECT * FROM frutas WHERE tipo = 'frutas1'");
                                while ($row = mysqli_fetch_array($result))
                                {
                                    echo "<form action='registro_pedido.php'method='post'>";
                                    echo "<img src='".$row["imagen"]."' width='100%' class='img-producto mt-3 mb-3'>";
                                    echo "<p class='azul mb-0'>$ ".$row['precio']."</p>";
                                    echo "<input name='imagen' value='".$row["imagen"]."' readonly='readonly' style='display: none'></input>";
                                    echo "<input name='precio' value='".$row["precio"]."' readonly='readonly' style='display: none'></input>";
                                    echo "<input name='descripcion' value='".$row["descripcion"]."' readonly='readonly' style='display: none'></input>";
                                    echo "<p class='naranja'>".$row['descripcion']."</p>";

                                }
                          ?>
                        </div>
                        
                        <div class="col-10 col-md-3 borde-amarillo mt-2 mb-2" style="border-radius: 10px;">

                        <?php

                            
                            $result = mysqli_query($conexion, "SELECT * FROM banano WHERE tipo = 'frutas2'");
                                while ($row = mysqli_fetch_array($result))
                                {
                                    echo "<form action='registro_pedido.php'method='post'>";
                                    echo "<img src='".$row["imagen"]."' width='100%' class='img-producto mt-3 mb-3'>";
                                    echo "<p class='azul mb-0'>$ ".$row['precio']."</p>";
                                    echo "<input name='imagen' value='".$row["imagen"]."' readonly='readonly' style='display: none'></input>";
                                    echo "<input name='precio' value='".$row["precio"]."' readonly='readonly' style='display: none'></input>";
                                    echo "<input name='descripcion' value='".$row["descripcion"]."' readonly='readonly' style='display: none'></input>";
                                    echo "<p class='naranja'>".$row['descripcion']."</p>";
                                    echo "</form>";
                                }
                          ?>
                        </div>
                        
                        <div class="col-10 col-md-3 borde-amarillo mt-2 mb-2" style="border-radius: 10px;">
                        <?php

                            
                            $result = mysqli_query($conexion, "SELECT * FROM mandarina WHERE tipo = 'frutas3'");
                                while ($row = mysqli_fetch_array($result))
                                {
                                    echo "<form action='registro_pedido.php'method='post'>";
                                    echo "<img src='".$row["imagen"]."' width='100%' class='img-producto mt-3 mb-3'>";
                                    echo "<p class='azul mb-0'>$ ".$row['precio']."</p>";
                                    echo "<input name='imagen' value='".$row["imagen"]."' readonly='readonly' style='display: none'></input>";
                                    echo "<input name='precio' value='".$row["precio"]."' readonly='readonly' style='display: none'></input>";
                                    echo "<input name='descripcion' value='".$row["descripcion"]."' readonly='readonly' style='display: none'></input>";
                                    echo "<p class='naranja'>".$row['descripcion']."</p>";
                                    echo "</form>";
                                }
                          ?>
                        </div>
                          
                      </div>
                </section> 

                <section class="mt-5 mb-5" id="bebidas">
                 
                    <div class="row">
                        <div class="col-12">
                             <p style="background-image: url(img/barra_p.png);background-repeat:no-repeat; background-size: contain; color:white; padding: 10px; text-align: left">BEBIDAS</p>
                        </div>
                    </div>
                        
                    <div class="row  text-center">
                      <div class="col-10 col-md-3 borde-amarillo mt-2 mb-2" style="border-radius: 10px;">
                        <?php
                            $conexion = mysqli_connect("db764611746.hosting-data.io", "dbo764611746", "GeralCamiloAlejo2021*", "db764611746");
                            
                            $result = mysqli_query($conexion, "SELECT * FROM poker WHERE tipo = 'bebidas5'");
                                while ($row = mysqli_fetch_array($result))
                                {
                                    echo "<form action='registro_pedido.php'method='post'>";
                                    echo "<img src='".$row["imagen"]."' width='100%' class='img-producto mt-3 mb-3'>";
                                    echo "<p class='azul mb-0'>$ ".$row['precio']."</p>";
                                    echo "<input name='imagen' value='".$row["imagen"]."' readonly='readonly' style='display: none'></input>";
                                    echo "<input name='precio' value='".$row["precio"]."' readonly='readonly' style='display: none'></input>";
                                    echo "<input name='descripcion' value='".$row["descripcion"]."' readonly='readonly' style='display: none'></input>";
                                    echo "<p class='naranja'>".$row['descripcion']."</p>";
                                    echo "</form>";
                                }
                          ?>
                        </div>
                        
                        <div class="col-10 col-md-3 borde-amarillo mt-2 mb-2" style="border-radius: 10px;">

                        <?php

                            
                            $result = mysqli_query($conexion, "SELECT * FROM nectar WHERE tipo = 'bebidas3'");
                                while ($row = mysqli_fetch_array($result))
                                {
                                    echo "<form action='registro_pedido.php'method='post'>";
                                    echo "<img src='".$row["imagen"]."' width='100%' class='img-producto mt-3 mb-3'>";
                                    echo "<p class='azul mb-0'>$ ".$row['precio']."</p>";
                                    echo "<input name='imagen' value='".$row["imagen"]."' readonly='readonly' style='display: none'></input>";
                                    echo "<input name='precio' value='".$row["precio"]."' readonly='readonly' style='display: none'></input>";
                                    echo "<input name='descripcion' value='".$row["descripcion"]."' readonly='readonly' style='display: none'></input>";
                                    echo "<p class='naranja'>".$row['descripcion']."</p>";
                                    echo "</form>";
                                }
                          ?>
                        </div>
                         
                         <div class="col-10 col-md-3 borde-amarillo mt-2 mb-2" style="border-radius: 10px;">

                        <?php

                            
                            $result = mysqli_query($conexion, "SELECT * FROM nectar WHERE tipo = 'bebidas3'");
                                while ($row = mysqli_fetch_array($result))
                                {
                                    echo "<form action='registro_pedido.php'method='post'>";
                                    echo "<img src='img/club_dorada.png' width='100%' class='img-producto mt-3 mb-3'>";
                                    echo "<p class='azul mb-0'>$ 2500</p>";
                                    echo "<input name='imagen' value='".$row["imagen"]."' readonly='readonly' style='display: none'></input>";
                                    echo "<input name='precio' value='".$row["precio"]."' readonly='readonly' style='display: none'></input>";
                                    echo "<input name='descripcion' value='".$row["descripcion"]."' readonly='readonly' style='display: none'></input>";
                                    echo "<p class='naranja'>Club colombia dorada</p>";
                                    echo "</form>";
                                }
                          ?>
                        </div>
                          
                      </div>
                </section>    
        
                 <section class="mt-5 mb-5" id="granos">
                 
                    <div class="row">
                        <div class="col-12">
                             <p style="background-image: url(img/barra_p.png);background-repeat:no-repeat; background-size: contain; color:white; padding: 10px; text-align: left">GRANOS</p>
                        </div>
                    </div>
                        
                    <div class="row  text-center">
                      <div class="col-10 col-md-3 borde-amarillo mt-2 mb-2" style="border-radius: 10px;">
                        <?php
                            $conexion = mysqli_connect("db764611746.hosting-data.io", "dbo764611746", "GeralCamiloAlejo2021*", "db764611746");
                            
                            $result = mysqli_query($conexion, "SELECT * FROM pasta WHERE tipo = 'grano1'");
                                while ($row = mysqli_fetch_array($result))
                                {
                                    echo "<form action='registro_pedido.php'method='post'>";
                                    echo "<img src='".$row["imagen"]."' width='100%' class='img-producto mt-3 mb-3'>";
                                    echo "<p class='azul mb-0'>$ ".$row['precio']."</p>";
                                    echo "<input name='imagen' value='".$row["imagen"]."' readonly='readonly' style='display: none'></input>";
                                    echo "<input name='precio' value='".$row["precio"]."' readonly='readonly' style='display: none'></input>";
                                    echo "<input name='descripcion' value='".$row["descripcion"]."' readonly='readonly' style='display: none'></input>";
                                    echo "<p class='naranja'>".$row['descripcion']."</p>";
                                    echo "</form>";
                                }
                          ?>
                        </div>
                        
                        <div class="col-10 col-md-3 borde-amarillo mt-2 mb-2" style="border-radius: 10px;">

                        <?php

                            
                            $result = mysqli_query($conexion, "SELECT * FROM lenteja WHERE tipo = 'grano3'");
                                while ($row = mysqli_fetch_array($result))
                                {
                                    echo "<form action='registro_pedido.php'method='post'>";
                                    echo "<img src='".$row["imagen"]."' width='100%' class='img-producto mt-3 mb-3'>";
                                    echo "<p class='azul mb-0'>$ ".$row['precio']."</p>";
                                    echo "<input name='imagen' value='".$row["imagen"]."' readonly='readonly' style='display: none'></input>";
                                    echo "<input name='precio' value='".$row["precio"]."' readonly='readonly' style='display: none'></input>";
                                    echo "<input name='descripcion' value='".$row["descripcion"]."' readonly='readonly' style='display: none'></input>";
                                    echo "<p class='naranja'>".$row['descripcion']."</p>";
                                    echo "</form>";
                                }
                          ?>
                        </div>
                        
                        <div class="col-10 col-md-3 borde-amarillo mt-2 mb-2" style="border-radius: 10px;">
                        <?php

                            
                            $result = mysqli_query($conexion, "SELECT * FROM frijol WHERE tipo = 'grano2'");
                                while ($row = mysqli_fetch_array($result))
                                {
                                    echo "<form action='registro_pedido.php'method='post'>";
                                    echo "<img src='".$row["imagen"]."' width='100%' class='img-producto mt-3 mb-3'>";
                                    echo "<p class='azul mb-0'>$ ".$row['precio']."</p>";
                                    echo "<input name='imagen' value='".$row["imagen"]."' readonly='readonly' style='display: none'></input>";
                                    echo "<input name='precio' value='".$row["precio"]."' readonly='readonly' style='display: none'></input>";
                                    echo "<input name='descripcion' value='".$row["descripcion"]."' readonly='readonly' style='display: none'></input>";
                                    echo "<p class='naranja'>".$row['descripcion']."</p>";
                                    echo "</form>";
                                }
                          ?>
                        </div>
                          
                      </div>
                </section> 
            </div> 
        </main>

<?php 
    include("footer.php");
?>
