<?php
// index.php

// Incluir el archivo de configuración
include 'config.php';

// Redirigir a la última página visitada
if (isset($_COOKIE['pagina1'])) {
    header("Location: " . $_COOKIE['pagina1']);
    exit;
}

// Gestión del contador de accesos
if (isset($_COOKIE['contador'])) {
    $contador = $_COOKIE['contador'] + 1;
} else {
    $contador = 1;
}
setcookie('contador', $contador, time() + 2592000, "/");

echo "Es el acceso número: $contador";

