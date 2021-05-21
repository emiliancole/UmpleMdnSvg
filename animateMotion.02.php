<?php
include "autoload.php";

$svg1=new Svg("500","500","0 0 500 500", "http://www.w3.org/2000/svg","fill:none;");
$svg1->open();
$c1=new Circle(0,0,5,"fill:red;");
$c1->open();
$anim1=new AnimateMotion("","","10s","indefinite","M20,50 C20,-50 180,150 180,50 C180-50 20,150 20,50 z");

$anim1->draw();
$c1->close();
$pa1=new Path("M20,50 C20,-50 180,150 180,50 C180-50 20,150 20,50 z","fill:none;stroke:navy;");
$pa1->draw();
$svg1->close();
?>
