<?php include 'config.php';?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina 1</title>
    <link href="css/<?php echo $estilos; ?>" type="text/css" rel="stylesheet">

</head>
<body>
    <?php include 'navegacion.php'; ?>
    <h1>Pagina 1</h1>
    <?php echo "<p>visitas : $visitas </p> " ;?>
    <?php echo "<p>pagina anterior : $paginaAnt </p>";?>
</body>
</html>