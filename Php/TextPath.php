<?php
/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.30.2.5248.dba0a5744 modeling language!*/

class TextPath
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //TextPath Attributes
  private $href;
  private $style;
  private $text;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct($aHref, $aStyle, $aText)
  {
    $this->href = $aHref;
    $this->style = $aStyle;
    $this->text = $aText;
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

  public function setStyle($aStyle)
  {
    $wasSet = false;
    $this->style = $aStyle;
    $wasSet = true;
    return $wasSet;
  }

  public function setText($aText)
  {
    $wasSet = false;
    $this->text = $aText;
    $wasSet = true;
    return $wasSet;
  }

  public function getHref()
  {
    return $this->href;
  }

  public function getStyle()
  {
    return $this->style;
  }

  public function getText()
  {
    return $this->text;
  }

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {}
  
  public function draw()
  {
    echo "<textPath href='".$this->getHref()."' 
    style='".$this->getStyle()."' >".$this->getText()."</textPath>";
  } 
  
  public function open()
  {
    echo "<textPath href='".$this->getHref()."' style='".$this->getStyle()."' >";
  }

   public function close()
  {
    echo "</textPath>";
  }

}
?>