<?php
include "autoload.php";

$svg1=new Svg("500","500","0 0 500 500", "http://www.w3.org/2000/svg","fill:none;");
$svg1->open();
$title=new Title("linearGradient demo");
$title->draw();
$lg1=new LinearGradient("myGradient","rotate(90)");
$lg1->open();
$s1=new Stop("5%","red");
$s2=new Stop("95%","gold");
$s1->draw();
$s2->draw();
$lg1->close();

$c1=new Circle(100,100,30,"fill:url(#myGradient)");
$c1->draw();
$svg1->close();
?>