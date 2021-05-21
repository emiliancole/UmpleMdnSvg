<?php
/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.30.2.5248.dba0a5744 modeling language!*/

class Ellipse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //Ellipse Attributes
  private $cy;
  private $cx;
  private $rx;
  private $ry;
  private $style;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct($aCy, $aCx, $aRx, $aRy, $aStyle="stroke:black;stroke-width:1;fill:none;")
  {
    $this->cy = $aCy;
    $this->cx = $aCx;
    $this->rx = $aRx;
    $this->ry = $aRy;
    $this->style = $aStyle;
  }

  //------------------------
  // INTERFACE
  //------------------------

  public function setCy($aCy)
  {
    $wasSet = false;
    $this->cy = $aCy;
    $wasSet = true;
    return $wasSet;
  }

  public function setCx($aCx)
  {
    $wasSet = false;
    $this->cx = $aCx;
    $wasSet = true;
    return $wasSet;
  }

  public function setRx($aRx)
  {
    $wasSet = false;
    $this->rx = $aRx;
    $wasSet = true;
    return $wasSet;
  }

  public function setRy($aRy)
  {
    $wasSet = false;
    $this->ry = $aRy;
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

  public function getCy()
  {
    return $this->cy;
  }

  public function getCx()
  {
    return $this->cx;
  }

  public function getRx()
  {
    return $this->rx;
  }

  public function getRy()
  {
    return $this->ry;
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
    echo "<ellipse cx='".$this->getCx()."' cy='".$this->getCy()."' rx='".$this->getRx()."'  
    ry='".$this->getRy()."' style='".$this->getStyle()."' />";
  }
  
  public function open()
  {
    echo "<ellipse cx='".$this->getCx()."' cy='".$this->getCy()."' rx='".$this->getRx()."'  
    ry='".$this->getRy()."' style='".$this->getStyle()."' >";
  }

   public function close()
  {
    echo "</ellipse>";
  }

}
?>