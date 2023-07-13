<?php

    $dato1=$_POST['imagen'];
    $dato2=$_POST['descripcion'];
    $dato3= $_POST['precio'];




    require("cnx_reservaciones.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");

                
                //require("connect_db.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
                mysqli_query($conexion,"INSERT INTO pedido VALUES('','$dato1','$dato2','$dato3')");
                //echo 'Se ha registrado con exito';
                echo "<script>location.href='terminar_domicilio.php'</script>";


    
?>