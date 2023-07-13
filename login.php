<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>SESIÓN</title>
        <meta author="William Alejandro Castro">
        <meta description="Encuentra la oportunidad de mercar desde la comodidad de tu hogar en un sitio real y seguro ubicado en Bogotá, bienvenido a Supermercado imperial, te ofrecemos gran variedad">
        <meta keywords="Supermercado, Imperial, Bogotá">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/sesion-registro.css">
    </head>
    
    <body>

      <div class="container">

            <main class="col-xs-12 col-md-6 mt-4 p-4">
                
                <div class="row">
                    <div class="logo col-12 mt-3"><a href="index.php"></a></div>
                    <div class="text-center"><a href="index.php" class="btn fondo-amarillo mt-3 naranja">Volver</a></div>
                </div>
                
                <div class="row">
                    <div class="foto-usuario col-12 mt-3 mb-3"></div>
                </div>
                
                <div class="row">

                   <form action="validar-login.php" method="post" class="text-center">
                    
                        <div class="form-group">
                           <span><img src="img/user.png" alt="Correo" width="25px"></span>
                           <input class="form-control has-success" type="text" name="mail" placeholder="Correo" required>
                        </div>
                        <div class="form-group mt-3">
                            <span><img src="img/password.png" alt="contraseña" width="25px"></span>
                            <input class="form-control" type="password" name="pass" placeholder="Contraseña" required>
                        </div>

                        <ul>
                            <?php if (!empty($errores)): ?>
                            <?php echo $errores ?>
                            <?php endif; ?>
                        </ul>
                        
                         <a href="<?php echo RUTA.'registro.php' ?>" class="login-link">¿No tienes cuenta?</a>

                        <div class="text-center"><button type="submit" class="btn boton-a mt-3">Iniciar sesión</button></div>
                        <div class="text-center"><a href="registro-view.php" class="btn boton-a mt-3">Regístrate</a></div>
                    </form>
                </div>
                
            </main>
            
       </div>
      
      
      
      <footer>
          
      </footer>
      
      
      <script src="js/jquery.js"></script>
      <script src="js/script.js"></script>
      <script src="js/bootstrap.min.js"></script>
      
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

        
    </body>
</html>


