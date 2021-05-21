<?php
/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.30.2.5248.dba0a5744 modeling language!*/

class Path
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //Path Attributes
  private $id;
  private $d;
  private $style;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct($aId, $aD, $aStyle="stroke:black;stroke-width:1;fill:none;")
  {
    $this->id = $aId;
    $this->d = $aD;
    $this->style = $aStyle;
  }

  //------------------------
  // INTERFACE
  //------------------------

  public function setId($aId)
  {
    $wasSet = false;
    $this->id = $aId;
    $wasSet = true;
    return $wasSet;
  }

  public function setD($aD)
  {
    $wasSet = false;
    $this->d = $aD;
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

  public function getId()
  {
    return $this->id;
  }

  public function getD()
  {
    return $this->d;
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
    echo "<path id='".$this->getId()."' d='".$this->getD()."' style='".$this->getStyle()."' />";
  }

}
?>