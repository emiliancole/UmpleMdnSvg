<?php
include "autoload.php";

$svg1=new Svg("500","500","0 0 500 500", "http://www.w3.org/2000/svg","fill:none;");
$svg1->open();
$title=new Title("Animate demo");
$title->draw();
$r1=new Rect(100,100,100,100,30,30,"fill:none;stroke:navy;");
$r1->open();
$anim1=new Animate("rx","0;30;0","10s","indefinite");
$anim1->draw();
$r1->close();

$svg1->close();
?>
