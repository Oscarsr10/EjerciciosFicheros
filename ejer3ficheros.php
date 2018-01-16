<?php

/* Este script se encarga de subir mÃºltiples ficheros al servidor. */ 

#Formulario en el que se pregunta el nÃºmero de ficheros 
if(!isset($fich) && !isset($cargar)){ 
?>
<html>
<head> 
<title>:: ¿Cuantos ficheros quiere subir hoy? ::</title>
</head><body background="fondo3.jpg">
<FORM NAME="frmNumFicheros" METHOD="POST" ACTION="ejer3ficheros.php"> 
     
<BR><BR><BR><BR>
<DIV ALIGN="CENTER">
<INPUT TYPE="TEXT" NAME="numFicheros">

<B>Introduce el numero de ficheros</B> 
<BR><BR>
<INPUT TYPE="SUBMIT" VALUE="Mostrar campos para subir ficheros">
<BR></DIV>

</FORM></BODY></HTML>
<?php
} 

#Formulario en el que se muestran los campos tipo fichero 
if(isset($fich)){ 
?>
<HTML><HEAD>
<TITLE>:: ¿Cuantos ficheros quiere subir hoy? ::</TITLE> 
</HEAD><BODY>
<FORM ENCTYPE="multipart-form/data" 
                 NAME="frmCargaFicheros" 
                 METHOD="POST"
ACTION="ejer3ficheros.php">
$fichero=$_POST["numFicheros"]

    for($i=0;$i<count($fichero);$i++){ 
         
<INPUT TYPE="FILE" NAME="fichero_$i[]"><BR>

    } 
<INPUT TYPE="SUBMIT" VALUE="cargar"> 
</FORM></BODY></HTML>";    

<?php
} 

#Parte que gestiona el proceso de carga 
if(isset($cargar)){ 

     
    for($n=0;$n<$cantidad;$n++){ 

        #Creamos la "variable variable" 
        $nomvar = "fichero_$n"; 
        $valvar = ${$nomvar}; 

        #Extraemos el nombre del fichero sin la ruta 
        $nomfichero = basename($valvar); 

        #Le damos al fichero su nombre, metiÃ©ndolo dentro del directorio /subidas 
        $nuevositio = "subidas/".$nomfichero.""; 

        #Lo copiamos 
        if(!copy($valvar,$nuevositio)){ 
            echo "NO SE HA PODIDO SUBIR EL FICHERO"; 
        } 
        else{ 
            echo "FICHERO SUBIDO CON EXITO"; 
        } 
    } 


}

?>
