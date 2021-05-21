<?php
include "autoload.php";

$svg1=new Svg("500","500","0 0 500 500", "http://www.w3.org/2000/svg","fill:none;");
$svg1->open();
$t1=new Text(20,35,0,0,"stroke:black;font:italic 13px sans-serif;","My");
$t1->draw();
$t2=new Text(40,35,0,0,"stroke:black;fill:yellow;font:bold 30px sans-serif;","cat");
$t2->draw();
$t3=new Text(55,55,0,0,"stroke:black;font:italic 13px sans-serif;","is");
$t3->draw();
$t4=new Text(65,55,0,0,"font: italic 40px serif; fill: red;","Grumpy!");
$t4->draw();
$svg1->close();
?>