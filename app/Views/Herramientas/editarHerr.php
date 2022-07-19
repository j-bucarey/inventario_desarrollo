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

  <title>Editar</title>

  </head>
  
  <body>

  <br>
  <br>
  <br>
    

  <div class="container card text-center col-6">
    <div class="card-body">
        <h5 class="card-title">Editar datos de herramientas</h5>
        <p class="card-text">

        <form method="post" action="<?=site_url('/actualizarHerr')?>" enctype="multipart/form-data">
    
        <input type="hidden" name="id" value="<?=$herramienta['id']?>">
    
        <div class="form-group">
        <label for="nombre">Nombre:</label> 
        <input id="nombre" value="<?=$herramienta['nombre']?>" class="form-control" type="text" name="nombre">
    </div>
    <div class="form-group">
        <label for="stock">stock:</label>
        <input id="stock" value="<?=$herramienta['codigo']?>" class="form-control" type="text" name="codigo">
    </div>
    <div class="form-group">
        <label for="nombre">Código:</label>
        <input id="nombre" value="<?=$herramienta['stock']?>" class="form-control" type="text" name="stock">
    </div>
    <button class="btn btn-success" type="submit">Guardar</button>
  </form>


        </p>
    </div>
  </div>