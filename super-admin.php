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
    <title>super admin</title>
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








<?php 
    include("footer-usuario.php");
?>