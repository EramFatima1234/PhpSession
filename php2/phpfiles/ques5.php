
<?php

  list($width, $height, $type, $attr) = getimagesize('eram.png');

  echo 'Width of image : '.$width.'<br>';

  echo 'Height of image : '.$height.'<br>';

  echo 'Image type :'.$type.'<br>';

  echo 'Image attribute :'.$attr;
  ?> 