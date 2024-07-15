<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>formato</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <br>
    <div class="container">
        <h1 class="text-center" style="background-color: black; color:white; border: radius 5px;">REGISTROS</h1>
    </div>
    <br>
    <div class="container">
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">nombre</th>
                    <th scope="col">apellido paterno</th>
                    <th scope="col">apellido materno</th>
                    <th scope="col">edad</th>
                    <th scope="col">nacionalidad</th>
                    <th scope="col">ciudad de nacimiento</th>
                    <th scope="col">numero telefonico</th>
                    <th scope="col">rfc</th>
                    <th scope="col">acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require("config/conexion.php");

                $sql = $conexion->query("SELECT * FROM `usuarios`");
                while ($resultado = $sql->fetch_assoc()) {
                ?>
                    <tr>
                        <th scope="row"><?php echo $resultado['id']?></th>
                        <th scope="row"><?php echo $resultado['nombre']?></th>
                        <th scope="row"><?php echo $resultado['apellido_paterno']?></th>
                        <th scope="row"><?php echo $resultado['apellido_materno']?></th>
                        <th scope="row"><?php echo $resultado['edad']?></th>
                        <th scope="row"><?php echo $resultado['nacionalidad']?></th>
                        <th scope="row"><?php echo $resultado['ciudad_nacimiento']?></th>
                        <th scope="row"><?php echo $resultado['numero_telefonico']?></th>
                        <th scope="row"><?php echo $resultado['rfc']?></th>
                        <th>
                            <a href="formularios/editarform.php?id=<?php echo $resultado['id']?>" class="btn btn-warning">EDITAR</a>
                            <a href="CRUD/eliminar.php?id=<?php echo $resultado['id']?>" class="btn btn-danger">ELIMINAR</a>
                        </th>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <div class="container">
          <a href="formularios/agregar.php" class="btn btn-success">Agregar registro</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>