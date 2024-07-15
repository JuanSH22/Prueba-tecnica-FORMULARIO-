<?php
include("../config/conexion.php");
   $Nombre = $_POST['Nombre'];
   $ApellidoP = $_POST['ApellidoP'];
   $ApellidoM = $_POST['ApellidoM'];
   $Edad = $_POST['Edad'];
   $Nacionalidad = $_POST['Nacionalidad'];
   $Ciudad = $_POST['Ciudad'];
   $Numero = $_POST['Numero'];
   $RFC= $_POST['RFC'];

   $sql = "INSERT INTO usuarios(nombre,apellido_paterno,apellido_materno,edad,nacionalidad,ciudad_nacimiento,numero_telefonico,rfc) VALUES 
   ('$Nombre','$ApellidoP','$ApellidoM','$Edad','$Nacionalidad','$Ciudad','$Numero','$RFC')";

   $resultado = mysqli_query($conexion, $sql);

   if ($resultado === true){
    header("location:../index.php");
  
   } else{
    echo "Datos no Insertados";
   }
