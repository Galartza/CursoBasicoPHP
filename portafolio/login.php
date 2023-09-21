<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-header">
                        Iniciar sesión
                    </div>
                    <div class="card-body">

                        <form action="login.php" method="post">
                            Usuario: <input class="form-control" type="text" name="usuario" id="">
                            <br />
                            Contraseña: <input class="form-control" type="text" name="contrasenia" id="">
                            <br />

                        </form>
                    </div>
                    <div class="card-footer text-body-secondary">
                        <button class="btn btn-success" type="submit">Entrar al portfolio</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">

            </div>
        </div>

    </div>



</body>

</html>