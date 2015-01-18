<?php
session_start(); // Staring Session
$num1 = rand(1, 9);
$num2 = rand(1, 9);
$total = $num1 + $num2;
$math = $num1 . "+" . $num2 . "=";

$_SESSION["captcha_code"] = $total; // Initializing session variable with above generated sub-string


    $image = imagecreatetruecolor(190, 100);
    imagesavealpha($image, true);

    $trans_colour = imagecolorallocatealpha($image, 0, 0, 0, 127); // transparent background
    imagefill($image, 0, 0, $trans_colour);

    // font files
    $fonts = array(
        0 => '1942.ttf'
    );
    $font_dir = 'fonts/';
    $font = $font_dir . $fonts[0];
    
    $font_colour = imagecolorallocate($image, 0, 0, 0); // Font Color
    $font_size = 55;

    $x_px = 5; // get x coordinates for text to be center aligned
    $y_px = $font_size + 12; // get y coordinates for text to be middle aligned

    imagettftext($image, $font_size, 0, $x_px, $y_px, $font_colour, $font, $math); // add text to image

    header('Content-type: image/png');
    imagepng($image);
?>