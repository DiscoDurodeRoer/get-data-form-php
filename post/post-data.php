<?php
 
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
 
    $nombreCompleto = $nombre . ' ' . $apellidos;
 
    echo $nombreCompleto.'<br/>';
 
?>
 
<a href="index.html">Volver</a>