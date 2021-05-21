<?php
/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.30.2.5248.dba0a5744 modeling language!*/

class LinearGradient
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //LinearGradient Attributes
  private $id;
  private $gradientTransform;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct($aId, $aGradientTransform)
  {
    $this->id = $aId;
    $this->gradientTransform = $aGradientTransform;
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

  public function setGradientTransform($aGradientTransform)
  {
    $wasSet = false;
    $this->gradientTransform = $aGradientTransform;
    $wasSet = true;
    return $wasSet;
  }

  public function getId()
  {
    return $this->id;
  }

  public function getGradientTransform()
  {
    return $this->gradientTransform;
  }

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {}
  
  public function open()
  {
    echo "<linearGradient id='".$this->getId()."' gradientTransform='".$this->getGradientTransform()."' >";
  }

   public function close()
  {
    echo "</linearGradient>";
  }

}
?>