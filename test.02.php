<?php
include "autoload.php";

$svg1=new Svg("500","500","0 0 500 500", "http://www.w3.org/2000/svg","fill:none;");
$c1=new Circle(100,100,30,"fill:red;");
$e1=new Ellipse(50,50,10,20,"fill:navy;");
//$r1=new Rect(150,150,40,40,5,5,"stroke:navy;fill:none;");
$im1=new Image(150,150,40,40,"https://mdn.mozillademos.org/files/6457/mdn_logo_only_color.png",
"fill:none;");
$lin1=new Line(0,0,100,100,"stroke:green;");
$poly1=new Polygon("0,100 50,25 50,75 100,0","stroke:orange;fill:none;");
$pline1=new Polyline("0,100 50,25 50,75 100,0","stroke:orange;fill:none;");
$d="M 10,30
           A 20,20 0,0,1 50,30
           A 20,20 0,0,1 90,30
           Q 90,60 50,90
           Q 10,60 10,30 z";
$pa1=new Path($d,"stroke:red;fill:none;");
$svg1->open();
$a1=new A("https://google.com","_blank","stroke:blue;");
$a1->open();
$c1->draw();
$a1->close();

//$r1->draw();
$im1->draw();
$lin1->draw();
$pa1->draw();
//$poly1->draw();
$pline1->draw();
$sym1=new Symbol("sym1",200,50,50,50,"fill:none;");
$sym1->open();
$e1->draw();
$sym1->close();
$use1=new Usee("#sym1",150,50,70,70,"opacity:0.5;");
$use1->draw();
$def1=new Defs();
$def1->open();
$def1->close();
$svg1->close();
?>