<?php   
   $password = $_POST['password'];

   if ( ($password == "12345")) {
      echo "Bienvenido ";
   } else {
      echo "¡Usuario o contraseña incorrectos!";
      echo '<br><a href="'.$_SERVER['HTTP_REFERER'].'">Volver</a>';
   }
?>

