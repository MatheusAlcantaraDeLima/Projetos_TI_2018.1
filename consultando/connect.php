<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "db_cadastro";

   # $link = mysqli_connect($host,$user,$pass,$db);
    $link =  new mysqli($host,$user,$pass,$db);
?>