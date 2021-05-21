<?php
/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.30.2.5248.dba0a5744 modeling language!*/

class Polyline
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //Polyline Attributes
  private $points;
  private $style;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct($aPoints, $aStyle="stroke:black;stroke-width:1;fill:none;")
  {
    $this->points = $aPoints;
    $this->style = $aStyle;
  }

  //------------------------
  // INTERFACE
  //------------------------

  public function setPoints($aPoints)
  {
    $wasSet = false;
    $this->points = $aPoints;
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

  public function getPoints()
  {
    return $this->points;
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
    echo "<polyline points='".$this->getPoints()."' style='".$this->getStyle()."' />";
  }

}
?>