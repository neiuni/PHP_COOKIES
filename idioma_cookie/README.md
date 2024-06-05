### 01-cookie_idioma.php

gestion simple de cookie. SI exite cookie toma el valor de la cookie, sino obtenemos el lenguaje del navegador.

```substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2);```

### 📂idioma_cookie 



#### 02-cookie_idioma_fic_0.php

Pagina que cambia toma ciertos valores de las variables definidas en los ficheros de idiomas.

Contiene un menu para cambiar de idioma

#### 📂lang  
tenemos un fichero con definición de variables en distintos idiomas para poder presentar esos valores en la pagina . Generalmente hay un idioma base y de hacen copia de los demas idiomas, cambiando el valor de las variables.

en nuestro caso ca.php es.php y eu.php

eu.php
```php
<?php
    $menu1 = 'Hasi';
    $menu2 = 'Irten';
    $saludo ='Egunon';
?>
```




#### 02-cookie_idioma_fic_cambiar.php 
nos permite cambiar de idioma mediante una redireción

```php
<?php
if (isset($_GET['idioma'])){setcookie('idioma', $_GET['idioma']);}
header("location:02-cookie_idioma_fic_0.php");?>
```

