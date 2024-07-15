<?php 
include("../config/conexion.php");


$id = $_GET['id'];
$sql = "DELETE FROM usuarios WHERE id = '$id'";

$query =mysqli_query($conexion,$sql);

if($query === true){
    header("location:../index.php");
}
?>