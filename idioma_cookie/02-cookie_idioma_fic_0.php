<?php
//print_r ($_COOKIE);
if (isset($_COOKIE['idioma'])){
    $idioma = $_COOKIE['idioma'];
}
else {
    $idioma = substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2);
    setcookie('idioma',$idioma);
}
if ($idioma !='es' and $idioma != 'ca' and $idioma != 'eu' )
{ $idioma = 'es';}
$fichero = 'lang/'. $idioma . '.php'; // fichero con los valores de idioma
include($fichero);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Idiona</title>
</head>
<body>
    <!-- menu para gestionar el idioma -->
    <!-- FALTA gestionar idiomas con JS  MODIFICAR COOKIE idioma -->
        <nav>
        <ul>
            <li>
                <a href="02-cookie_idioma_fic_cambiar.php?idioma=ca">CA</a>
            </li>
            <li>
                <a href="02-cookie_idioma_fic_cambiar.php?idioma=es">ES</a>
            </li>
            <li>
                <a href="02-cookie_idioma_fic_cambiar.php?idioma=eu">EU</a>
            </li>
        </ul>
    </nav>
    <!-- fin menu idioma -->
    <?php 
       echo "<ul><li>$menu1</li><li>$menu2</li></ul>";
       echo "<h3>$saludo</h3>";
    ?> 
</body>
</html>