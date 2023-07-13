<?php

    $conexion = mysqli_connect("db764611746.hosting-data.io", "dbo764611746", "GeralCamiloAlejo2021*", "db764611746");

    if (!$conexion){
        die("Error de conexion (" . mysqli_connect_errno(). ") " . mysqli_connect_error());
    }
    //else {
    //    echo "Conexion sin problemas";
    //}

?>