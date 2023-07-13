<?php

    $mysqli = new MySQLi("db764612057.hosting-data.io", "dbo764612057","GeralCamiloAlejo2023*", "db764612057");
		if ($mysqli -> connect_errno) 
        {
			die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_errno() 
				. ") " . $mysqli -> mysqli_connect_error());
		}
		else
            
$cn = mysqli_connect("db764612057.hosting-data.io", "dbo764612057","GeralCamiloAlejo2023*", "db764612057") or die("Error");
?>