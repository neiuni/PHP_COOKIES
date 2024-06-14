<?php// temas.php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['tema'])) {
    $tema = $_POST['tema'];
    setcookie('tema', $tema, time() + 2592000, "/");
    header("Location: " . $_SERVER['REQUEST_URI']);
    exit;
}

// Obtener el tema seleccionado
$temaSeleccionado = isset($_COOKIE['tema']) ? $_COOKIE['tema'] : 'tema1.css';

?>
<!DOCTYPE html>
<html>
<head>
    <title>Seleccionar Tema</title>
</head>
<body>
    <h1>Seleccionar Tema</h1>
    <form method="post">
        <label>
            <input type="radio" name="tema" value="tema1.css" <?php if ($temaSeleccionado === 'tema1.css') echo 'checked'; ?>> Tema 1 (Courier)
        </label><br>
        <label>
            <input type="radio" name="tema" value="tema2.css" <?php if ($temaSeleccionado === 'tema2.css') echo 'checked'; ?>> Tema 2 (Roboto)
        </label><br>
        <label>
            <input type="radio" name="tema" value="tema3.css" <?php if ($temaSeleccionado === 'tema3.css') echo 'checked'; ?>> Tema 3 (Tahoma)
        </label><br>
        <label>
            <input type="radio" name="tema" value="tema4.css" <?php if ($temaSeleccionado === 'tema4.css') echo 'checked'; ?>> Tema 4 (Verdana)
        </label><br>
        <button type="submit">Guardar Tema</button>
    </form>
</body>
</html>
