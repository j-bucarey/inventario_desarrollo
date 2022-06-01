<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body>
    <div id="login">
        <h3 class="text-center text-white display-4">Iniciar Sesion</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12  bg-light text-dark">

                        <?php if (session()->getFlashdata('msg')) : ?>
                            <div class="alert alert-warning">
                                <?= session()->getFlashdata('msg') ?>
                            </div>
                        <?php endif; ?>

                        <form id="formLogin" class="form" action="<?php echo base_url(); ?>/index.php/SigninController/loginAuth" method="post">
                            <h3 class="text-center text-dark">Iniciar Sesión</h3>
                            <div class="form-group">
                                <label for="usuario" class="text-dark">email</label><br>
                                <input type="text" name="email" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-dark">Password</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group text-center my-3">
                                <input type="submit" name="submit" class="btn btn-primary btn-lg btn-block" value="Conectar">
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>