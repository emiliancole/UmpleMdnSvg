<?php
/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.30.2.5248.dba0a5744 modeling language!*/

class Circle
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //Circle Attributes
  private $cx;
  private $cy;
  private $r;
  private $style;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct($aCx, $aCy, $aR, $aStyle="stroke:black;stroke-width:1;fill:none;")
  {
    $this->cx = $aCx;
    $this->cy = $aCy;
    $this->r = $aR;
    $this->style = $aStyle;
  }

  //------------------------
  // INTERFACE
  //------------------------

  public function setCx($aCx)
  {
    $wasSet = false;
    $this->cx = $aCx;
    $wasSet = true;
    return $wasSet;
  }

  public function setCy($aCy)
  {
    $wasSet = false;
    $this->cy = $aCy;
    $wasSet = true;
    return $wasSet;
  }

  public function setR($aR)
  {
    $wasSet = false;
    $this->r = $aR;
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

  public function getCx()
  {
    return $this->cx;
  }

  public function getCy()
  {
    return $this->cy;
  }

  public function getR()
  {
    return $this->r;
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
    echo "<circle cx='".$this->getCx()."' cy='".$this->getCy()."' r='".$this->getR()."'  
    style='".$this->getStyle()."' />";
  }
  
  public function open()
  {
    echo "<circle cx='".$this->getCx()."' cy='".$this->getCy()."' r='".$this->getR()."'  
    style='".$this->getStyle()."' >";
  }

   public function close()
  {
    echo "</circle>";
  }

}
?>