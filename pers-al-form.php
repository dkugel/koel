<?php
session_start();	 
	if (isset($_SESSION['loggedin']) & $_SESSION['loggedin'] == true)
	{	 
        }
        else
        {
	echo "Esta pagina es solo para usuarios registrados.<br>";
	echo "<a href='index.php'>Login Here!</a>";
	 
	exit;
	}
	$now = time(); // checking the time now when home page starts
	 
	if($now > $_SESSION['expire'])
	{
	session_destroy();
	echo "Su sesion a terminado, <a href='login.php'>
	      Necesita Hacer Login</a>";
	exit;
	}
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
        <!-- <header></header>   -->
                 
        <div class="container-fluid">
          <div class="main">
            <div class="row">
              <div class="col-1"></div>
                <div class="col-lg-10">
                    <div class="desc-1">
                      <h1>Banner web</h1>
                      <img src="img/banner-web.jpg" class="fn-img">                                           
                    </div>
                </div>                                
            </div>

            <div class="row">
              <div class="offset-2 col-8">              
              <form action="pers-al.php" method="post" name="formulario1" class="imagen-des"> 
              <h2>Paso 1</h2>
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6">
                    Diligencia la casilla para el número del HALL:
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6">
                                               
                      <div class="form-group">                          
                          <input type="text" class="form-control " id="InputHall" name="hall" >                                    
                      </div>                                                            
                      
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6">
                    Diligencia la casilla para el número del STAND:
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6">
                                               
                      <div class="form-group">                          
                          <input type="text" class="form-control " id="InputStand" name="stand" >                                    
                      </div>                                                            
                      
                  </div>
                </div>
                
                <h2>Paso 2</h2>
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6">
                    Descarga la imagen en formato jpg
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6">
                                                
                    <button type="submit" name="enviar" class="koel-btn"><img src="img/descargar.png"></button>                                                            
                      
                  </div>
                </div>

                
              </form>
              

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