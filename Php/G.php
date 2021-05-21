<?php
/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.30.2.5248.dba0a5744 modeling language!*/

class G
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //G Attributes
  private $id;
  private $style;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct($aId, $aStyle)
  {
    $this->id = $aId;
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
    echo "<g id='".$this->getId()."' style='".$this->getStyle()."' >";
  }

   public function close()
  {
    echo "</g>";
  }

}
?>