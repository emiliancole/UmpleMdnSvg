<?php
/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.30.2.5248.dba0a5744 modeling language!*/

class A
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //A Attributes
  private $href;
  private $target;
  private $style;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct($aHref, $aTarget, $aStyle)
  {
    $this->href = $aHref;
    $this->target = $aTarget;
    $this->style = $aStyle;
  }

  //------------------------
  // INTERFACE
  //------------------------

  public function setHref($aHref)
  {
    $wasSet = false;
    $this->href = $aHref;
    $wasSet = true;
    return $wasSet;
  }

  public function setTarget($aTarget)
  {
    $wasSet = false;
    $this->target = $aTarget;
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

  public function getHref()
  {
    return $this->href;
  }

  public function getTarget()
  {
    return $this->target;
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
  
  public function open()
  {
    echo "<a href='".$this->getHref()."' target='".$this->getTarget()."' style='".$this->getStyle()."' >";
  }

   public function close()
  {
    echo "</a>";
  }

}
?>
