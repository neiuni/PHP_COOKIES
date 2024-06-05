<?php
if (isset($_COOKIE['idioma'])){
    $idioma = $_COOKIE['idioma'];
}
else {
    $idioma = substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2);
    setcookie('idioma',$idioma);
}

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
    <?php 
       switch ($idioma) {
        case 'ca':
          $texto = 'bon dia';
          break;
        case 'eu':
            $texto = 'egunon';
          break;
        case 'fr':
            $texto = 'bonjour';
          break;
        case 'es':
            $texto = 'buenos dias';
          break;
          
        default:
            $texto = 'bon dia';
      }  

      echo $texto;
    ?> 
</body>
</html>