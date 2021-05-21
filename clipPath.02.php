<?php
include "autoload.php";

$svg1=new Svg("500","500","0 0 500 500", "http://www.w3.org/2000/svg","fill:none;");
$svg1->open();
$cp1=new ClipPath("cp1","");
$cp1->open();
$r1=new Rect(100,100,20,20,0,0,"stroke:navy;stroke-width:2;fill:blue;");
$r1->draw();
$cp1->close();

$c1=new Circle(100,100,20,"fill:blue;clip-path:url(#cp1);");
$c1->draw();

$svg1->close();
?>