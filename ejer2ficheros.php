<html>
<body background="fondo3.jpg">
<?php
function negrita($path,$cadena)
{
   $texto = "";
   $fp = fopen($path,"r");
   while ($linea= fgets($fp,1024))
   {
      $linea = str_replace($cadena,"<b>$cadena</b>",$linea);
      $texto .= $linea;
   }
   return $texto;
}

$path="ejer2ficheros.txt";
$cadena = "fichero";

$texto = negrita ($path,$cadena);

echo $texto;
?>
</body>
</html>