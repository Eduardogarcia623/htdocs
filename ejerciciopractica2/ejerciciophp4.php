<html>

<head>
    <title>Formulario de entrada del dato</title>
</head>

<body>
<form method="post" action="pagina4.php">
    Ingrese Primer valor:
    <input type="text" name="valor1">
    <br>
    Ingrese segundo Valor:
    <input type="text" name = "valor2">
    <br>
    <input type="radio" name="radio1" value="suma" >sumar
    <br>
    <input type="radio" name="radio1" value="resta" >restar
    <br>
    <input type="submit" name="0perar">
</form>

</form>
</body>

</html>

<html>

<head>
    <title>Problema</title>
</head>

<body>

<?php
$diaSemana[] = "Lunes";
$diaSemana[] = "Martes";
$diaSemana[] = "Miércoles";
$diaSemana[] = "Jueves";
$diaSemana[] = "Viernes";
$diaSemana[] = "Sábado";
$diaSemana[] = "Domingo";
echo "Primer elemento:" . $diaSemana[1];
echo "<br>";
echo "Ultimo elemento:" . $diaSemana[6];
?>

</body>

</html>