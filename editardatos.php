<?php

include_once("../config/conexion.php");

$id = $_POST['id'];
$Nombre = $_POST['Nombre'];
$ApellidoP = $_POST['ApellidoP'];
$ApellidoM = $_POST['ApellidoM'];
$Edad = $_POST['Edad'];
$Nacionalidad = $_POST['Nacionalidad'];
$Ciudad = $_POST['Ciudad'];
$Numero = $_POST['Numero'];
$RFC= $_POST['RFC'];

$sql = "UPDATE usuarios SET

          id='".$id."',
          nombre='".$Nombre."',
          apellido_paterno='".$ApellidoP."',
          apellido_materno='".$ApellidoM."',
          edad='".$Edad."',
          nacionalidad='".$Nacionalidad."',
          ciudad_nacimiento='".$Ciudad."',
          numero_telefonico='".$Numero."',
          rfc='".$RFC."' WHERE id = '".$id."'";

if ($resultado = $conexion->query($sql)){
    header("location:../index.php");

}