<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
    <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.css"
  rel="stylesheet"
/>
<!-- CSS -->
<link rel="stylesheet" href="css/style.css">

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">



</head>

<body>
    
    <div id="login">
        <section class="vh-100" style="background-color: #508bfc;">
            <div class="container py-5 h-100">
                  
                <div class="container py-5 h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                            <div class="card shadow-2-strong" style="border-radius: 1rem;">
                                <div class="card-body p-5 text-center">
                                    <!-- <h3 class="mb-5">Inicia session</h3> -->
                                            <?php if (session()->getFlashdata('msg')) : ?>
                                                <div class="alert alert-warning">
                                                    <?= session()->getFlashdata('msg') ?>
                                                </div>
                                            <?php endif; ?>

                                            <form id="formLogin" class="form" action="<?php echo base_url(); ?>/index.php/SigninController/loginAuth" method="post">
                                                <h3 class="text-center ">Iniciar Sesión</h3>
                                                <div class="form-group">
                                                    <label for="usuario" class="">Email</label><br>
                                                    <input type="text" name="email" id="email" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="password" class="">Password</label><br>
                                                    <input type="password" name="password" id="password" class="form-control">
                                                </div>
                                                <div class="form-group text-center my-3">
                                                    <input type="submit" name="submit" class="btn btn-primary btn-lg btn-block" value="Ingresar">
                                                </div>
                                                



                                            </form>
                                    


                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
        </section>
    </div>
    
</body>




<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.js"
></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>