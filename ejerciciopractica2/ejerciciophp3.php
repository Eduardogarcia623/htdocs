<html>
<head>
    <title>
    </title>

</head>
<body>
<?php
$valor = rand (1,100);
echo "El valor sorteado es $valor <br>";
if ($valor <=10)
    { echo "Tiene un solo Digito";}
   else{
       if ( $valor < 100 ) {
           echo "tiene dos digitos";
       }
       else{
           echo "tiendo tres digitos";  }
   }
?>
</body>
</html>

