<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name ="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X.UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <title>
        login con sesion
    </title>

</head>
<body >

<header>

</header>
<link rel=stylesheet href=../css/estilos.css>


<center>


    <form action="../modelo/loguear.php" method="POST">

        <div class=" container-fluid " >


           <img src="../imagenes/user1.png" width="100" height="120">

            <br><br>
            <label> Usuario: </label><br><br>
        <input type="text" name="usuario" placeholder="Ingrese usuario">
        <br><br>
            <label>Contraseña: </label><br><br>

        <input type="password" name="clave" placeholder="Ingrese contraseña">
        <br><br>
        <button type="submit"> Ingresar </button>

        </div>


    </form>

</center>
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="../bootstrap/js/bootstrap.min.js" ></script>



</body>




</html>
