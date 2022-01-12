<?php

    $height = $_POST['height'];
    $width = $_POST['width'];
    $red = $_POST['red'];
    $green = $_POST['green'];
    $blue = $_POST['blue'];
    $format = strtolower($_POST['format']);

    $raw = imagecreate($width,$height);
    imagecolorallocate($raw,$red,$green,$blue);
    $name = "gallary/image_".rand(1,5000).".".$format;

    if($format=="bmp"){
      if(imagebmp($raw,$name)){
        echo $name;
      }
    }
    elseif($format=="jpeg"){
      if(imagejpeg($raw,$name)){
        echo $name;
      }
      
    }
    elseif($format=="png"){
      if(imagepng($raw,$name)){
        echo $name;
      }
    }
    elseif($format=="webp"){
      if(imagewebp($raw,$name)){
        echo $name;
      }
    }
    elseif($format=="gif"){
      if(imagegif($raw,$name)){
        echo $name;
      }
    }
    imagedestroy($raw);
?>