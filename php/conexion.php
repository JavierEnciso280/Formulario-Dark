<?php

$hostName = "localhost";
$userName = "root";
$password = "";
$base = "darkForm";

$conectarBd = mysqli_connect($hostName, $userName, $password, $base);

if(mysqli_connect_errno()){
    echo "Error, no se pudo conectar a la base de datos";
}else{
    echo "Conectado a darkForm";
}

?>