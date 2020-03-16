<?php
session_start();	 
	if (isset($_SESSION['loggedin']) & $_SESSION['loggedin'] == true)
	{	 
        }
        else
        {
	echo "Esta pagina es solo para usuarios registrados.<br>";
	echo "<a href='login.php'>Login Here!</a>";
	 
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
        <header></header>  
                 
        <div class="container-fluid">
          <div class="main">
            <div class="row">
                <div class="col-lg-5">
                    <div class="desc-1">
                      <p>Banner web</p>
                      <img src="img/banner-web.jpg" class="fn-img">
                      <div class="row">
                        <div class="col-12 boton">
                        <a href="pers-al-form.php"><img src="img/personalizar.png"></a>
                        </div>
                      </div>
                      <p>Email Footer</p>
                      <img src="img/Email_footer-01.jpg" class="fn-img">
                      <div class="row">
                        <div class="col-12 boton">
                          <a href="pers-al-form.php"><img src="img/personalizar.png"></a>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="col-lg-4 revista">
                  <p>Pieza revista</p>
                  <div class="desc-1">
                    <img src="img/revista.jpg" class="fn-revista">
                    <div class="row">
                      <div class="col-10 boton">
                        <a href="https://koelnmesse.co/ferias/descargas/alimentec/revista.zip" target="_blank"><img src="img/descargar.png"></a>
                      </div>
                      <div class="col-2"></div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 logo">
                <p>Logo</p>
                  <div class="desc-1">
                    <img src="img/logo.png" class="fn-logo">
                    <div class="row">
                      <div class="col-10 boton">
                        <a href="https://koelnmesse.co/ferias/descargas/alimentec/logo.zip" target="_blank"><img src="img/descargar.png"></a>
                      </div>
                      <div class="col-lg-2 col-md-3 col-sm-3 col-3"></div>
                    </div>
                  </div>
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