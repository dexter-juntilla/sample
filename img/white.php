<?php
$image = imagecreate(2,2);
$white =imagecolorallocate($image, 0xff, 0xff, 0xff);
imagefilledrectangle(50,50,150,150,$white);
header("Content-Type: image/png");
imagepng($image);