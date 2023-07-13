<?php

    $conexion = mysqli_connect("db764611846.hosting-data.io","dbo764611846","GeralCamiloAlejo2022*","db764611846");

    if (!$conexion){
        die("Error de conexion (" . mysqli_connect_errno(). ") " . mysqli_connect_error());
    }
    //else {
    //    echo "Conexion sin problemas";
    //}

?>