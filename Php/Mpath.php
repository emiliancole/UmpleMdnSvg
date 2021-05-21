<?php
/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.30.2.5248.dba0a5744 modeling language!*/

class Mpath
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //Mpath Attributes
  private $href;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct($aHref)
  {
    $this->href = $aHref;
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

  public function getHref()
  {
    return $this->href;
  }

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {}
  
  public function draw()
  {
    echo "<mpath href='".$this->getHref()."' />";
  }

}
?>