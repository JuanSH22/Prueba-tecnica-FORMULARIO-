<?php

$host = "localhost";
$user = "root";
$pass = "";
$bd = "registros";

$conexion = new mysqli($host,$user,$pass,$bd);

if (!$conexion){
    echo 'coneccion fallida';
}
?>