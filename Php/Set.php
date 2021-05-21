<?php
/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.30.2.5248.dba0a5744 modeling language!*/

class Set
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //Set Attributes
  private $attributeName;
  private $to;
  private $begin;
  private $dur;
  private $repeatCount;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct($aAttributeName, $aTo, $aBegin, $aDur, 
  $aRepeatCount="indefinite")
  {
    $this->attributeName = $aAttributeName;
    $this->to = $aTo;
    $this->begin = $aBegin;
    $this->dur = $aDur;
    $this->repeatCount = $aRepeatCount;
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

  public function setTo($aTo)
  {
    $wasSet = false;
    $this->to = $aTo;
    $wasSet = true;
    return $wasSet;
  }

  public function setBegin($aBegin)
  {
    $wasSet = false;
    $this->begin = $aBegin;
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

  public function getAttributeName()
  {
    return $this->attributeName;
  }

  public function getTo()
  {
    return $this->to;
  }

  public function getBegin()
  {
    return $this->begin;
  }

  public function getDur()
  {
    return $this->dur;
  }

  public function getRepeatCount()
  {
    return $this->repeatCount;
  }

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {}
  
  public function draw()
  {
    echo "<set attributeName='".$this->getAttributeName()."' to='".$this->getTo()."' 
    begin='".$this->getBegin()."'  dur='".$this->getDur()."' 
    repeatCount='".$this->getRepeatCount()."' />";
  }

}
?>