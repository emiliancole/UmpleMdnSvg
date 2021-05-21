<?php
/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.30.2.5248.dba0a5744 modeling language!*/

class Line
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //Line Attributes
  private $x1;
  private $y1;
  private $x2;
  private $y2;
  private $style;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct($aX1, $aY1, $aX2, $aY2, $aStyle="stroke:black;stroke-width:1;fill:none;")
  {
    $this->x1 = $aX1;
    $this->y1 = $aY1;
    $this->x2 = $aX2;
    $this->y2 = $aY2;
    $this->style = $aStyle;
  }

  //------------------------
  // INTERFACE
  //------------------------

  public function setX1($aX1)
  {
    $wasSet = false;
    $this->x1 = $aX1;
    $wasSet = true;
    return $wasSet;
  }

  public function setY1($aY1)
  {
    $wasSet = false;
    $this->y1 = $aY1;
    $wasSet = true;
    return $wasSet;
  }

  public function setX2($aX2)
  {
    $wasSet = false;
    $this->x2 = $aX2;
    $wasSet = true;
    return $wasSet;
  }

  public function setY2($aY2)
  {
    $wasSet = false;
    $this->y2 = $aY2;
    $wasSet = true;
    return $wasSet;
  }

  public function setStyle($aStyle)
  {
    $wasSet = false;
    $this->style = $aStyle;
    $wasSet = true;
    return $wasSet;
  }

  public function getX1()
  {
    return $this->x1;
  }

  public function getY1()
  {
    return $this->y1;
  }

  public function getX2()
  {
    return $this->x2;
  }

  public function getY2()
  {
    return $this->y2;
  }

  public function getStyle()
  {
    return $this->style;
  }

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {}
  
  public function draw()
  {
    echo "<line x1='".$this->getX1()."' y1='".$this->getY1()."' x2='".$this->getX2()."'  
    y2='".$this->getY2()."' style='".$this->getStyle()."' />";
  }

}
?>