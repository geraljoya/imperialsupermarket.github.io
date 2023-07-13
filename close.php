<?php session_start();

    require 'admin/config.php';
    require 'index.php';
    session_destroy();
    @header('Location: index.php');

 ?>
