<?php
include "autoload.php";

$svg1=new Svg("500","500","0 0 500 500", "http://www.w3.org/2000/svg","fill:none;");
$svg1->open();
$r1=new Rect(10,10,30,30,0,0,"fill:red;");
$r1->open();
$set1=new Set("x","100","click","2s","1");
$set1->draw();
$r1->close();
$svg1->close();
?>