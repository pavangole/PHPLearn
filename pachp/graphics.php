<?php
echo  "Hello";
 // load font and image, calculate width of text
 $font = dirname(__FILE__) . '/home/vaibhavgole/workspace-Pavan/fifth-sem/Php/blazed.ttf';
 $size = 12;
 $image = imagecreatefrompng("button.jpeg");
 $tsize = imagettfbbox($size, 0, $font, $_GET['message']);

 // center
 $dx = abs($tsize[2] - $tsize[0]);
 $dy = abs($tsize[5] - $tsize[3]);
 $x = (imagesx($image) - $dx) / 2;
 $y = (imagesy($image) - $dy) / 2 + $dy;

 // draw text
 $black = imagecolorallocate($im,0,0,0);
 imagettftext($image, $size, 0, $x, $y, $black, $font, $_GET['message']);

 // return image
 header("Content-type: image/jpeg");
 imagepng($image);
?>
<html>
 <head>
 <title>Button Form</title>
 </head>

 <body>
 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
 Enter message to appear on button:
 <input type="text" name="message" /><br />
 <input type="submit" value="Create Button" />
 </form>
 </body>
</html>