
<html>

<head>
    <meta charset="UTF-8">
    <meta name ="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X.UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="p/css/bootstrap.min.css">
    <link rel="stylesheet" href="los.css">
</head>

<body>

<header>

</header>

<link rel="stylesheet" href="los.css">
<?php

session_start();
$usuario = $_SESSION [ 'username'];

if(!isset($usuario)){
    header("location: ../views/login.view.php");
}
else{

    echo "<h1> Bienvenido $usuario </h1>";

    echo "<a href='../controllers/logout.php' > SALIR </a> ";

}

?>
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="p/js/bootstrap.min.js" ></script>


</body>
</html>
