<?php
include "autoload.php";

$svg1=new Svg("500","500","0 0 500 500", "http://www.w3.org/2000/svg","fill:none;");
$svg1->open();

$mk1=new Marker("circle1",5,5,8,8,"auto","");
$mk1->open();
$c1=new Circle(5,5,3,"stroke:none;fill:black;");
$c1->draw();
$mk1->close();

$mk2=new Marker("arrow1",4,6,12,12,"auto","");
$mk2->open();
$p1=new Path("p1","M2,2 L2,11 L10,6 L2,2","stroke:black;fill:black;");
$p1->draw();
$mk1->close(); 

$l1=new Line(100,50,200,50,"stroke:navy;stroke-width:2;
marker-start:url(#circle1);marker-end: url(#arrow1);");
$l1->draw();

$svg1->close();
?>