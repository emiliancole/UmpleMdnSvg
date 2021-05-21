<?php
require_once "Php/Svg.php";
require_once "Php/Circle.php";
require_once "Php/Ellipse.php";
require_once "Php/Rect.php";

$svg1=new Svg("500","500","0 0 500 500", "http://www.w3.org/2000/svg","fill:none;");
$c1=new Circle(100,100,30,"fill:red;");
$e1=new Ellipse(50,50,10,20,"fill:navy;");
$r1=new Rect(150,150,40,40,5,5,"stroke:navy;fill:none;");
//echo $c1->getCx();
$svg1->open();
$c1->draw();
$e1->draw();
$r1->draw();
$svg1->close();
?>