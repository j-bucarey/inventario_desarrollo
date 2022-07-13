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

  <p>Formulario Crear</p>

    

  <div class="card">
    <div class="card-body">
        <h5 class="card-title">Editar datos de producto</h5>
        <p class="card-text">

        <form method="post" action="<?=site_url('/actualizar')?>" enctype="multipart/form-data">
    
        <input type="hidden" name="id" value="<?=$producto['id']?>">
    
        <div class="form-group">
        <label for="nombre">Nombre:</label> 
        <input id="nombre" value="<?=$producto['nombre']?>" class="form-control" type="text" name="nombre">
    </div>
    <div class="form-group">
        <label for="stock">stock:</label>
        <input id="stock" value="<?=$producto['stock']?>" class="form-control" type="text" name="stock">
    </div>
    <div class="form-group">
        <label for="nombre">Código:</label>
        <input id="nombre" value="<?=$producto['codigo']?>" class="form-control" type="text" name="codigo">
    </div>
    <button class="btn btn-success" type="submit">Guardar</button>
  </form>


        </p>
    </div>
  </div>