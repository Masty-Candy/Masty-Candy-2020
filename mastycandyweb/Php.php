<link href="Php.php.css" rel="stylesheet" type="text/css">
<link href="index.html" rel="stylesheet" type="text/css">
<style type="text/css">
@import url("index.html.css");
</style>
<?php
$destino = "mastycandy2020@gmail.com";
$nombre = $_POST["Nombre"];
$correo = $_POST["Correo"];
$telefono = $_POST["Celular"];
$mensaje = $_POST["Mensaje"];
$contenido = "Nombre: " . $nombre . "\nCorreo " . $correo . "\nCelular " . $telefono . "\Mensaje " .$mensaje;
mail($destino, "Contacto", $contenido);
header("Location: Gracias.html")
?>