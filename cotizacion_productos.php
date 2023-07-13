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
         ?>
         
         <main>
                <div class="container">
                    <div class="row">
                        <p class='text-center mt-5'>ESTOS SON LOS PRODUCTOS QUE ELEGISTE PARA TU DOMICILIO:</p>
                    </div>

                    <?php
                        $conexion = mysqli_connect("db764611746.hosting-data.io", "dbo764611746", "GeralCamiloAlejo2021*", "db764611746");
                        require("conexion.php");

                        echo "<table class='table table-hover col-10 col-md-6 mt-5 mb-5' method='post' action=''>";
                        echo "<thead class='fondo-naranja'";
                        echo "<tr class='naranja'><th class='blanco'>TU DOMICILIO ES:</th></tr>";
                        echo "</thead";
                        echo "<tr><th class='blanco'>Producto</th><th class='blanco'>Descripción</th><th class='blanco'>Precio</th><th class='blanco'></th></tr>";
                        $suma_total = 0;
                        if (isset($_POST["descripcion"]))
                        {
                            $productos = $_POST["descripcion"];
                            foreach($productos as $precio) 
                            {

                                $consulta = mysqli_query($conexion, "SELECT * FROM comprar WHERE id = $precio");
                                while ($row = mysqli_fetch_array($consulta, MYSQLI_ASSOC)) 
                                {
                                    echo "<form method='post' action=''>";
                                    echo "<tr><td><input name='imagen' value='".$row["imagen"]."' readonly='readonly'><img src=''</input></td>";
                                    echo "<td><input name='descripcion' value='".$row['descripcion']."' readonly='readonly'><img src=''</input> </td>";
                                    echo "<td><input name='precio' value='".$row['precio']."' readonly='readonly'><img src=''</input></td>";
                                    echo "<td><input name='tipo' value='".$row['tipo']."' readonly='readonly'><img src=''</input></td>";
                                    echo "</tr>";

                                    $suma_total = $suma_total + $row["precio"];
                                }
                            }
                        }

                        echo "<tr><input name='total' value='" . $suma_total ."' readonly='readonly'><img  src=''</input></tr>";
                        echo "<button  class='signupbtn' type='submit' name='submit'/>Reservar</button>";
                        echo "</form>";
                        echo "</table>";
                    ?>

                    <form method='post' action=''>
                        <input name="imagen" value="" required>
                        <button  class="signupbtn" type="submit" name="submit"/>Reservar</button>
                        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">CANCELAR</button>
                    </form>


                    <div class="row">
                        <img src="img/gif.gif" class="mt-5">
                    </div>


                    <form class='contentreg' method='post' action=''>
                        <input type="text" name="imagen" value="" required>
                        <input type="text" name="descripcion" required>
                        <input type="text" name="precio" value="<?php echo $row['imagen'] ?>" required>
                        <button  class="signupbtn" type="submit" name="submit"/>Reservar</button>
                        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">CANCELAR</button>
                    </form>
                    <?php
                        if(isset($_POST['submit']))
                        {
                            require("registro_pedido.php");
                        }
                    ?>

             </div> 
          </main>


<?php 
    include("footer-usuario.php");
?>