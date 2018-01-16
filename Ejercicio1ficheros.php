<html>
<body background="fondo3.jpg">
<form action="" method="post" enctype="multipart/form-data">
    <label for="file">Sube un archivo:</label>
    <input type="file" name="archivo" id="archivo" />
    <input type="submit" name="boton" value="Subir" />
</form>
<div class="resultado">
<?php
if(isset($_POST['boton'])){
    if ((($_FILES["archivo"]["type"] == "image/gif") ||
    ($_FILES["archivo"]["type"] == "image/jpeg") ||
    ($_FILES["archivo"]["type"] == "image/png")) &&
    ($_FILES["archivo"]["size"] < 200000)) {
 
        echo "Archivo no permitido";
    }
}
?>
</div>
</body>
</html>