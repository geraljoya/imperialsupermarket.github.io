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
            $conexion=mysqli_connect('localhost','root','','super');
        ?>
        <div class="container">
        
        <div class="row">
                   <table class="table table-borderless text-center mt-5 mb-5 col-10 col-md-6 borde-naranja">
                       <thead>
                            <tr class="berlin blanco fondo-naranja borde-naranja">
                              <td>CLIENTE</td>
                              <td>EMAIL</td>
                            </tr>
                       </thead>
                       
                       
                       <tbody>
                             <?php 
                                $sql="SELECT * from login";
                                $result=mysqli_query($conexion,$sql);
                                while($mostrar=mysqli_fetch_array($result))
                                {
                              ?>

                            <tr class="azul">
                              <td><?php echo $mostrar['user'] ?></td>
                              <td><?php echo $mostrar['email'] ?></td>
                            </tr>

                            <?php   
                            }
                            ?>
                       </tbody>
                   </table>
               </div>
          </div>