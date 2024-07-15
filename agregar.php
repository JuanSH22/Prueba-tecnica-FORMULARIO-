<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agregar registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="bg-black p-2 text-white text-center">Agregar Resgistro </h1>
    <br>
    <div class="container">
    <form action="../CRUD/insertarDatos.php" method="post">
  <div class="mb-3">
    <label class="form-label">Nombre</label>
    <input type="text" class="form-control" name="Nombre">
  </div>
  <div class="mb-3">
    <label class="form-label">Apellido Paterno</label>
    <input type="text" class="form-control" name="ApellidoP">
  </div>
  <div class="mb-3">
    <label class="form-label">Apellido Materno</label>
    <input type="text" class="form-control" name="ApellidoM">
  </div>
  <div class="mb-3">
    <label class="form-label">Edad</label>
    <input type="text" class="form-control" name="Edad">
  </div>
  <div class="mb-3">
    <label class="form-label">Nacionalidad</label>
    <input type="text" class="form-control" name="Nacionalidad">
  </div>
  <div class="mb-3">
    <label class="form-label">Ciudad de Nacimiento</label>
    <input type="text" class="form-control" name="Ciudad">
  </div>
  <div class="mb-3">
    <label class="form-label">Numero Telefonico</label>
    <input type="text" class="form-control" name="Numero">
  </div>
  <div class="mb-3">
    <label class="form-label">RFC</label>
    <input type="text" class="form-control" name="RFC">
  </div>
  <div class="text-center">
  <button type="submit" class="btn btn-danger">enviar</button>
  <a href="../index.php" class="btn btn-dark">Regresar</a>
  </div>
</form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>