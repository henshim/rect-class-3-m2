<?php
include ('rect-class.php');
$width=10;
$height=20;
$rect=new rectangle($width,$height);
echo $rect->width;
echo '<br>'.$rect->height;

'<br>'.$rect->height = 30;
'<br>'.$rect->width = 20;

echo '<br>'.$rect->height;
echo '<br>'.$rect->width;
echo '<br>'.$rect->getPerimeter();
echo '<br>'.$rect->getArea();
echo '<br>'.("Your Rectangle". '<br>'.$rect->display());
