<?php
/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.30.2.5248.dba0a5744 modeling language!*/

class Stop
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //Stop Attributes
  private $offset;
  private $stopColor;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct($aOffset, $aStopColor)
  {
    $this->offset = $aOffset;
    $this->stopColor = $aStopColor;
  }

  //------------------------
  // INTERFACE
  //------------------------

  public function setOffset($aOffset)
  {
    $wasSet = false;
    $this->offset = $aOffset;
    $wasSet = true;
    return $wasSet;
  }

  public function setStopColor($aStopColor)
  {
    $wasSet = false;
    $this->stopColor = $aStopColor;
    $wasSet = true;
    return $wasSet;
  }

  public function getOffset()
  {
    return $this->offset;
  }

  public function getStopColor()
  {
    return $this->stopColor;
  }

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {}
  
  public function draw()
  {
    echo "<stop offset='".$this->getOffset()."' stop-color='".$this->getStopColor()."' />";
  }

}
?>