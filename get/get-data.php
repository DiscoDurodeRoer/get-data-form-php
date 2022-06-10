<?php

    $nombre = $_GET['nombre'];
    $apellidos = $_GET['apellidos'];

    $nombreCompleto = $nombre . ' ' . $apellidos;

    echo $nombreCompleto.'<br/>';

?>

<a href="index.html">Volver</a>