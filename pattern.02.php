<?php
include "autoload.php";

$svg1=new Svg("500","500","0 0 500 500", "http://www.w3.org/2000/svg","fill:none;");
$svg1->open();
$defs=new Defs();
$defs->open();
$p1=new Pattern("patt1",10,10,20,20);
$p1->open();
$c1=new Circle(10,10,10,"fill:blue;");
$c1->draw();
$p1->close();
$defs->close();

$r1=new Rect(10,10,100,100,0,0,"stroke:navy;stroke-width:2;fill:url(#patt1);");
$r1->draw();
$svg1->close();
?>