<?php
/* Create some objects 
ini_set("session.use_cookies", 1);
ini_set("session.use_only_cookies", 0);
ini_set("session.use_trans_sid", 1);
ini_set("session.cache_limiter", "");
*/


session_start();
$image = new Imagick(); 
$ci=rand(0,2);
$k=$_SESSION["incorrectPath"];
//var_dump($s);
for ($i=0; $i<3; $i++){
    if($i==$ci){
        $s=glob($_SESSION["correctPath"]."/*");
        shuffle($s);
        $image->readImage(array_pop($s));
        $image->resizeImage(150,150,Imagick::FILTER_SINC,0,TRUE);
        $draw = new \ImagickDraw();
        $draw->setStrokeColor(new \ImagickPixel('black'));
        $draw->setFillColor(new \ImagickPixel('white'));
        $draw->setStrokeWidth(1);
        $draw->setFontSize(30);
        $draw->setTextAlignment(\Imagick::ALIGN_LEFT);
        $draw->annotation(rand(20,60), rand(50,100), $_SESSION["correctNumber"]);
        $image->drawImage($draw);
        $image->swirlImage(rand(-10,10));
    }else{
        $b=array_pop($k);
        $b=glob($b."/*");
        shuffle($b);
        $image->readImage(array_pop($b));
        $image->resizeImage(150,150,Imagick::FILTER_SINC,0,TRUE);
        $draw = new \ImagickDraw();
        $draw->setStrokeColor(new \ImagickPixel('black'));
        $draw->setFillColor(new \ImagickPixel('white'));
        $draw->setStrokeWidth(1);
        $draw->setFontSize(30);
        $draw->setTextAlignment(\Imagick::ALIGN_LEFT);
        $draw->annotation(rand(20,60),rand(50,100), rand(0,99999));
        $image->drawImage($draw);
        $image->swirlImage(rand(-10,10));
    }
}

# Combine multiple images into one, stacked vertically.
$image->resetIterator();
$ima = $image->appendImages(false);
$ima->waveImage(rand (4,7), rand (50, 70));
//$ima->waveImage(rand (1,3), rand (50, 70));
$ima->swirlImage(rand(-10,10));
//$ima->solarizeImage(0);
$ima->setImageCompressionQuality(40);
$ima->setImageFormat("jpg");
$ima->addNoiseImage(5, imagick::CHANNEL_DEFAULT);

$ima->addNoiseImage(5, imagick::CHANNEL_DEFAULT);
$ima->addNoiseImage(5, imagick::CHANNEL_DEFAULT);
//$ima->addNoiseImage(6, imagick::CHANNEL_DEFAULT);
header("Content-Type: image/jpg");
echo $ima;
?>
 
