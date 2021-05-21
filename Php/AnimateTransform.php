<?php
/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.30.2.5248.dba0a5744 modeling language!*/

class AnimateTransform
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //AnimateTransform Attributes
  private $attributeName;
  private $attributeType;
  private $type;
  private $from;
  private $to;
  private $dur;
  private $repeatCount;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct($aAttributeName, $aAttributeType, $aType, $aFrom, $aTo, $aDur, $aRepeatCount)
  {
    $this->attributeName = $aAttributeName;
    $this->attributeType = $aAttributeType;
    $this->type = $aType;
    $this->from = $aFrom;
    $this->to = $aTo;
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

  public function setAttributeType($aAttributeType)
  {
    $wasSet = false;
    $this->attributeType = $aAttributeType;
    $wasSet = true;
    return $wasSet;
  }

  public function setType($aType)
  {
    $wasSet = false;
    $this->type = $aType;
    $wasSet = true;
    return $wasSet;
  }

  public function setFrom($aFrom)
  {
    $wasSet = false;
    $this->from = $aFrom;
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

  public function getAttributeType()
  {
    return $this->attributeType;
  }

  public function getType()
  {
    return $this->type;
  }

  public function getFrom()
  {
    return $this->from;
  }

  public function getTo()
  {
    return $this->to;
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
    echo "<animateTransform attributeName='".$this->getAttributeName()."' 
    attributeType='".$this->getAttributeType()."' type='".$this->getType()."'
    from='".$this->getFrom()."' to='".$this->getTo()."'
    dur='".$this->getDur()."'  repeatCount='".$this->getRepeatCount()."' />";
  }

}
?>