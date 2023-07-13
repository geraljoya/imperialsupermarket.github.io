<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Supermercado Imperial</title>
    <meta author="William Alejandro Castro">
    <meta description="Encuentra la oportunidad de mercar desde la comodidad de tu hogar en un sitio real y seguro ubicado en Bogotá, bienvenido a Supermercado imperial, te ofrecemos gran variedad">
    <meta keywords="Supermercado, Imperial, Bogotá">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
         <?php 
            include("header.php");
         ?>
         
         <main>
            <div class="container-fluid">
             <section>
                 <div class="row mt-4 mb-5">
                 <h2 class="slogan col-12"><span>"</span> SUPERMERCADO IMPERIAL, DÓNDE TU DINERO RINDE MÁS<span> "</span></h2>
                 <div id="spot" class="mt-3 mb-3 col-12 col-md-10">
                 <video src="video/spot.mp4" controls></video>
                 </div>
                 </div>
             </section>
             <section>
                <div class="row mb-5">
                    <article id="supermercado" class="col-12 col-md-6 col-lg-5">
                        <h1>SUPERMERCADO IMPERIAL</h1>
                        <p class="blanco text-center">Podrás encontrarlo ubicado en suba-turingia en la ciudad de Bogotá; en el supermercado encontrarás gran variedad deproductos de la canasta familiar, brindándote servicios de fruver, cigarrería y cárnicos.</p>
                    </article>
                    
                    <article id="ubicacion" class="col-12 col-md-6 col-lg-5">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7952.244830165426!2d-74.0943506595482!3d4.748765827510902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f84591c9d60e9%3A0xb15e09229e93f291!2sCra.+103b+%23150c-39%2C+Bogot%C3%A1!5e0!3m2!1ses!2sco!4v1539034399924" width="100%" height="320" frameborder="0" style="border:0;" allowfullscreen></iframe>
                    </article>
                </div>
             </section>
            </div>
         </main>
         
<?php 
    include("footer.php");
?>

<?php 

@ session_start();

include 'admin/config.php';
@include 'functions.php';

// comprobar session
if (isset($_SESSION['usuario'])) {
  // validar los datos por privilegio
  $conexion = conexion($bd_config);
  $usuario = iniciarSession('usuarios', $conexion);

  if ($usuario['tipo_usuario'] == 'administrador') {
    header('Location: '.RUTA.'admin.php');
  } elseif ($usuario['tipo_usuario'] == 'usuario') {
    @header('Location: '.RUTA.'usuario.php');
  } else {
    header('Location: '.RUTA.'login.php');
  }
} else {
  @header('Location: '.RUTA.'login.php');
}

?>
