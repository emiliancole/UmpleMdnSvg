<?php
/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.30.2.5248.dba0a5744 modeling language!*/

class AnimateMotion
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //AnimateMotion Attributes
  private $attributeName;
  private $values;
  private $dur;
  private $repeatCount;
  private $path;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct($aAttributeName, $aValues, $aDur, $aRepeatCount, $aPath)
  {
    $this->attributeName = $aAttributeName;
    $this->values = $aValues;
    $this->dur = $aDur;
    $this->repeatCount = $aRepeatCount;
    $this->path = $aPath;
  }

  //------------------------
  // INTERFACE
  //------------------------

  public function setAttributeName($aAttributeName)
  {
    $wasSet = false;
    $this->attributeName = $aAttributeName;
    $wasSet = true;
    return $wasSet;
  }

  public function setValues($aValues)
  {
    $wasSet = false;
    $this->values = $aValues;
    $wasSet = true;
    return $wasSet;
  }

  public function setDur($aDur)
  {
    $wasSet = false;
    $this->dur = $aDur;
    $wasSet = true;
    return $wasSet;
  }

  public function setRepeatCount($aRepeatCount)
  {
    $wasSet = false;
    $this->repeatCount = $aRepeatCount;
    $wasSet = true;
    return $wasSet;
  }

  public function setPath($aPath)
  {
    $wasSet = false;
    $this->path = $aPath;
    $wasSet = true;
    return $wasSet;
  }

  public function getAttributeName()
  {
    return $this->attributeName;
  }

  public function getValues()
  {
    return $this->values;
  }

  public function getDur()
  {
    return $this->dur;
  }

  public function getRepeatCount()
  {
    return $this->repeatCount;
  }

  public function getPath()
  {
    return $this->path;
  }

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {}
  
  public function draw()
  {
    echo "<animateMotion attributeName='".$this->getAttributeName()."' values='".$this->getValues()."' 
    dur='".$this->getDur()."'  repeatCount='".$this->getRepeatCount()."' path='".$this->getPath()."' />";
  }

}
?>