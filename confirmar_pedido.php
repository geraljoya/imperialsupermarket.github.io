<?php

    $dato1=$_POST['direccion'];
    $dato2=$_POST['celular'];
    $dato3= $_POST['total'];
    $dato4= $_POST['mensaje'];




    require("cnx_reservaciones.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");

                
                //require("connect_db.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
                mysqli_query($conexion,"INSERT INTO confirmacion VALUES('','$dato1','$dato2','$dato3', '$dato4')");
                //echo 'Se ha registrado con exito';
                echo ' <script language="javascript">alert("Articulo Añadido");</script> ';
                echo "<script>location.href='terminar_domicilio.php'</script>";


    
?>