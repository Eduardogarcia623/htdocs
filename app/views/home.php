<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name ="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X.UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href= "css/styles.css">
    <title>
        login con sesion
    </title>

</head>
<body >
<header>

</header>
<form action="../models/login.php" method="POST">
    <div class="container">
        <div class="row">
            <img src="images/user1.png" width="100" height="120">
            <div class="usuario">
                <label>Usuario:</label> <br>
                <input type="text" name="usuario" placeholder="Ingrese usuario">
            </div>
            <br>
            <div class="contrasena">
                <label>Contraseña:</label>

                <input type="password" name="contrasena" placeholder="Ingrese contraseña">
            </div>
            <div class="boton">
                <br>
                <button type="submit">Ingresar</button>
            </div>
        </div>
    </div>
</form>

<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="bootstrap/js/bootstrap.min.js" ></script>



</body>




</html>