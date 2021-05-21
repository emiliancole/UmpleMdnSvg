<?php
include "autoload.php";

$svg1=new Svg("500","500","0 0 500 500", "http://www.w3.org/2000/svg","fill:none;");
$svg1->open();
$g1=new G("g1","stroke:green;");
$g1->open();
$c1=new Circle(100,100,30,"fill:none;");
$e1=new Ellipse(50,50,10,20,"fill:none;");
$c1->draw();
$e1->draw();
$g1->close();

$svg1->close();
?>