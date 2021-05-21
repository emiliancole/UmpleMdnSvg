<?php
include "autoload.php";

$svg1=new Svg("500","500","0 0 500 500", "http://www.w3.org/2000/svg","fill:none;");
$svg1->open();

$mk1=new Mask("mk1",0,0,100,100,"");
$mk1->open();
$r1=new Rect(0,0,100,50,0,0,"stroke:none;stroke-width:2;fill:white;");
$r1->draw();
$mk1->close();

$r2=new Rect(1,1,100,100,0,0,"stroke:navy;stroke-width:2;fill:blue;mask:url(#mk1)");
$r2->draw();

$svg1->close();
?>