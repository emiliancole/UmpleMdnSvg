<?php
include "autoload.php";

$svg1=new Svg("500","500","0 0 500 500", "http://www.w3.org/2000/svg","fill:none;");
$svg1->open();

$t1=new Text(10,30,0,0,"stroke:navy;font:italic 20px serif;","You are");
$t2=new Text(100,30,0,0,"stroke:navy;font:italic 20px serif;","a banana");
$t1->open();
$ts1=new Tspan(80,30,0,0,"font: bold 20px sans-serif; fill: red;","not");
$ts1->draw();
echo "   a banana!";
$t1->close();
$svg1->close();
?>