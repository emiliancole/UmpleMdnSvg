<?php
include "autoload.php";

$svg1=new Svg("500","500","0 0 500 500", "http://www.w3.org/2000/svg","fill:none;");
$svg1->open();
$title=new Title("radialGradient demo");
$title->draw();
$rg1=new RadialGradient("myGradient","");
$rg1->open();
$s1=new Stop("15%","gold");
$s2=new Stop("95%","red");
$s1->draw();
$s2->draw();
$rg1->close();

$c1=new Circle(100,100,40,"fill:url(#myGradient)");
$c1->draw();
$svg1->close();
?>