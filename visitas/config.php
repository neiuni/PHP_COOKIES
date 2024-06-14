<?php


// config.php

// Recoger la última página visitada
if (isset($_SERVER['REQUEST_URI'])) {
    setcookie('pagina', $_SERVER['REQUEST_URI'], time() + 2592000, "/");
}

// Aplicar el tema seleccionado
$tema = isset($_COOKIE['tema']) ? $_COOKIE['tema'] : 'tema1.css';
echo '<link rel="stylesheet" type="text/css" href="' . htmlspecialchars($tema) . '">';
