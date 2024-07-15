<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Resgistro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<tbody>
    <h1 class="text-center" style="background-color: black; color:white; border: radius 5px;">Editar productos</h1>
<br>
    <form class="container" action="../CRUD/editardatos.php" method="post">
        <?php
        include_once('../config/conexion.php');

        $sql = "SELECT * FROM usuarios WHERE id = ".$_REQUEST['id'];
        $resultado = $conexion -> query($sql);

        $row = $resultado->fetch_assoc();
        
        ?>
                    <input type="Hidden" class="form-control" name ="id" value="<?php echo $row['id']?>">




        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" class="form-control" name ="Nombre" value="<?php echo $row['nombre']?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Apellido Paterno</label>
            <input type="text" class="form-control" name ="ApellidoP" value="<?php echo $row['apellido_paterno']?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Apellido Materno</label>
            <input type="text" class="form-control" name ="ApellidoM" value="<?php echo $row['apellido_materno']?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Edad</label>
            <input type="text" class="form-control" name ="Edad" value="<?php echo $row['edad']?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Nacionalidad</label>
            <input type="text" class="form-control" name ="Nacionalidad" value="<?php echo $row['nacionalidad']?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Ciudad de nacimiento</label>
            <input type="text" class="form-control" name ="Ciudad" value="<?php echo $row['ciudad_nacimiento']?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Numero telefonico</label>
            <input type="text" class="form-control" name ="Numero" value="<?php echo $row['numero_telefonico']?>">
        </div>
        <div class="mb-3">
            <label class="form-label">RFC</label>
            <input type="text" class="form-control" name ="RFC" value="<?php echo $row['rfc']?>">
        </div>
        <div class="text-center">
        <button type="submit" class="btn btn-danger">Agregar</button>
        <a href="../index.php" class="btn btn-dark">Regresar</a>

        </div>
    </form>
</tbody>