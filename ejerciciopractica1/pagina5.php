<html>
<head>
</head>
<body>
<?php
$ar = fopen( "datos.txt" , "a") or
   die("Problemas de creacion");
fputs( $ar , $_REQUEST ["nombre"]);
fputs( $ar , "\n");
fputs( $ar , $_REQUEST ["comentarios"]);
fputs($ar , "\n");
fputs($ar , "-----------------------------------");
fputs($ar , "\n");
fclose($ar);
echo "los datos han sido cargados correctamente.";

?>


</body>




</html>