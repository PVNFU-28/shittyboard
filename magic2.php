<?php
/* Create some objects */
ini_set("session.use_cookies", 1);
ini_set("session.use_only_cookies", 0);
ini_set("session.use_trans_sid", 1);
ini_set("session.cache_limiter", "");

$image = new Imagick();
$draw = new ImagickDraw();
$pixel = new ImagickPixel( 'grey' );
session_start();
/* New image */
$image->newImage(100, 25, $pixel);

/* Black text */
$draw->setFillColor('black');

/* Font properties */
//$draw->setFont('');
$draw->setFontSize(14 );

/* Create text */
$image->annotateImage($draw, 5+rand(-3,7),12+5+rand(-5,5), 0, $_SESSION["captcha"]);
$image->waveImage(rand (1,2), rand (20, 50));
$image->setImageCompressionQuality(10);
/* Give image a format */
$image->setImageFormat('jpg');
$image->resizeImage(1.6*100,40,Imagick::FILTER_SINC,0,TRUE);
$image->addNoiseImage(4, imagick::CHANNEL_DEFAULT);
$image->addNoiseImage(3, imagick::CHANNEL_DEFAULT);
$image->addNoiseImage(2, imagick::CHANNEL_DEFAULT);
/* Output the image with headers */
header('Content-type: image/jpg');
echo $image;

?>
