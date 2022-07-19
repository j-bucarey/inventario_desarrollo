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

  <title>Crear</title>

  </head>
  
  <body>

  <p></p>

    

  <div class="card">
    <div class="card-body">
        <h5 class="card-title">Editar datos de proyecto</h5>
        <p class="card-text">

        <form method="post" action="<?=site_url('/actualizar_proyecto')?>" enctype="multipart/form-data">
    
        <input type="hidden" name="id" value="<?=$proyecto['id']?>">
    
        <div class="form-group">
        <label for="nombre_proyecto">Nombre del proyecto:</label> 
        <input id="nombre_proyecto" value="<?=$proyecto['nombre_proyecto']?>" class="form-control" type="text" name="nombre_proyecto">
    </div>
    <div class="form-group">
        <label for="stock">Fecha de inicio</label>
        <input id="fecha_inicio" value="<?=$proyecto['fecha_inicio']?>" class="form-control" type="text" name="fecha_inicio">
    </div>
    <div class="form-group">
        <label for="nombre">Fecha de entrega:</label>
        <input id="fecha_entrega" value="<?=$proyecto['fecha_entrega']?>" class="form-control" type="text" name="fecha_entrega">
    </div>
    <div class="form-group">
        <label for="stock">Codigo estado:</label>
        <input id="codigo_estado" value="<?=$proyecto['codigo_estado']?>"class="form-control" type="number" name="codigo_estado">
    </div>
    <br>
    <button class="btn btn-success" type="submit">Guardar</button>
  </form>


        </p>
    </div>
  </div>