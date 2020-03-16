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

    $hall  = isset($_POST['hall'])? $_POST['hall'] : NULL;
    $stand = isset($_POST['stand'])? $_POST['stand'] : NULL;
    
    $imgPath = 'editable/alimentec.jpg';
    $font_path = 'C:\laragon\www\koel\webfonts\trebuc.ttf';
    
    if (isset($_POST['enviar'])) {   
               
        header("Content-type: image/jpeg");
        header("Content-Disposition: attachment; filename=baner.jpg");
        
        $image = imagecreatefromjpeg($imgPath);
        $color = imagecolorallocate($image, 211, 32, 38);        
        $fontSize = 60;
        $x = 1815;
        $y = 185;
        $y2 = 385;
        $angle = 0;
        imagettftext($image, $fontSize, $angle ,$x, $y,$color, $font_path, $hall);
        imagettftext($image, $fontSize, $angle ,$x, $y2,$color, $font_path, $stand);
        imagejpeg($image);
        imagecreatefromjpeg("baner.jpg" . $image);
        imagedestroy($image);
                                                                                            
    }










    
?>