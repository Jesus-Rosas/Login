<html lang="es">
    <head>
        <meta charset="UTF-8"/>
        <title>Sing In</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/estilos.css"/>
    </head>
    <body>
        <div class="container">
            <div class="form-signin" role="form">
                <h2 class="form-signin-heading">Ingresa tus datos</h2>
                <label for="usuario" class="sr-only">Email address</label>
                <input type="text" id="Usuario" class="form-control" placeholder="Nombre de Usuario" required autofocus>
                <label for="Pass" class="sr-only">Password</label>
                <input type="password" id="Pass" class="form-control" placeholder="Contraseña" required>
                <button class="btn btn-lg btn-primary btn-block" type="button" id="singin">Sign in</button>
      </div>
            <div class="container" id="resultado">
                
            </div>
    </div> <!-- /container -->
        <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="js/code.js"></script>
    </body>
</html>
