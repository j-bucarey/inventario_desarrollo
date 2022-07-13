<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">

  <link rel="stylesheet" href="<?=base_url()?>/public/css/style.css">
  <!-- Boxiocns CDN Link -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
  <script src="<?=base_url()?>/public/js/aside.js"></script>

   <!-- bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
   
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Crear formulario</title>

  </head>
  
  <body>

  <p>Formulario proyecto</p>

  <div class="card">
    <div class="card-body">
        <h5 class="card-title">Ingresar datos del proyecto</h5>
        <p class="card-text">

        <form method="post" action="<?=site_url('/guardar_proyecto')?>" enctype="multipart/form-data">

    <div class="form-group">
        <label for="nombre">Nombre del proyecto:</label>
        <input id="nombre_proyecto" class="form-control" type="text" name="nombre_proyecto">
    </div>
    <div class="form-group">
        <label for="codigo">Fecha de inicio:</label>
        <input id="fecha_inicio" class="form-control" type="date" name="fecha_inicio">
    </div>
    <div class="form-group">
        <label for="stock">Fecha de entrega:</label>
        <input id="fecha_entrega" class="form-control" type="date" name="fecha_entrega">
    </div>
    <div class="form-group">
        <label for="stock">Codigo estado:</label>
        <input id="codigo_estado" class="form-control" type="number" name="codigo_estado">
    </div>
    <br>
    <button class="btn btn-success" type="submit">Guardar</button>
  </form>


        </p>
    </div>
  </div>