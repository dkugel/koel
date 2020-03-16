<?php
  session_start();  
?>
<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Font Aw -->
    <link href="css/all.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" >

    <title>Feria Alimentec :: koelnmesse</title>
   
  </head>
  <body>
        <div class="bg">            
            <div class="container h-100">
                <div class="row h-100 justify-content-center align-items-center">
                    <div class="form-box">
                        <p>Ingresa tu código de expositor</p>
                        <div class="mini-box">
                            <form action="index-inter.php" method="post" name="formulario1">                            
                                <div class="form-group">
                                    <label for="InputPassword1">Password</label>
                                    <input type="password" class="form-control empty" id="InputPassword1" name="password" placeholder="&#xF023;">                                    
                                </div>                                                            
                                <button type="submit" name="enviar" class="koel-btn">Enviar</button>
                            </form>
                        </div>
                        <p class="n-margen"><small>*Este código fue enviado vía mail a cada expositor</small></p>
                        <p><small>*Si aún no has recibido tu código, escríbenos a soporte@koelnmesse.com</small></p>
                        <?php 
                            $name = isset($_POST['password'])? $_POST['password'] : NULL;
                            if (isset($_POST['enviar'])) {   
                                                                    
                                $clave = filter_input(INPUT_POST,'password');
                                                            
                                $md5clave = md5($clave);
                                
                                if ($clave == '123456')
                                {				   
                                    //establecermos las variables de sesión                    
                                    $_SESSION['loggedin'] = true;
                                    $_SESSION['start'] = time();
                                    $_SESSION['expire'] = $_SESSION['start'] + (100 * 60) ;
                                    
                                    header("Location:package-inter.php"); 
                                }else{
                                    echo ' <font color="red">Clave incorrecta</font> ';                    
                                }
                                                                                                                    
                            }
                        ?>
                    </div>                     
                </div>
            </div>                       
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="js/app.js"></script>
  </body>
</html>