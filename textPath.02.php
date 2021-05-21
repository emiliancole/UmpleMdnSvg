<?php
include "autoload.php";

$svg1=new Svg("500","500","0 0 500 500","fill:none;");
$svg1->open();
$pat1=new Path("mypath","M10,90 Q90,90 90,45 Q90,10 50,10 Q10,10 10,40 Q10,70 45,70 Q70,70 75,50",
"stroke:green;");
$pat1->draw();
$t1=new Text(0,0,0,0,"","");
$t1->open();
$tp1=new TextPath("#mypath","stroke:navy;fill:none;","Quick brown fox jumps over the lazy dog.");
$tp1->draw();
$t1->close();

$svg1->close();
?>