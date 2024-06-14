# 📁 visitas

El ejercicio consiste en 3 páginas enlazadas. Voy a usar 2 Cookies :

- visitas : número de visitas a cualquiera de las 3 página
- pagina : Voy a guardar la última página visitada, para mostrala en la siguiente.

## config.php

Manejo de cookies

## navegacion.php 

barra de navegacion de las páginas

### pagina1.php pagina2.php pagina3.php

Páginas similares en las que voy muestro los valores de las cookies

```php	
   <?php include 'config.php';?>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pagina 1</title>
    </head>
    <body>
        <?php include 'navegacion.php'; ?>
        <h1>Pagina 1</h1>
        <?php echo "<p>visitas : $visitas </p> " ;?>
        <?php echo "<p>pagina anterior : $paginaAnt </p>";?>
    </body>
</html>
```
#### Añadir estilos

commit 

Nueva cookie estilos que me va a decir que estilo quiero aplicar a la página.

📁css  estilo1.css ..... estilo5.css