<?php
/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.30.2.5248.dba0a5744 modeling language!*/

class Text
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //Text Attributes
  private $x;
  private $y;
  private $dx;
  private $dy;
  private $style;
  private $text;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct($aX, $aY, $aDx, $aDy, $aStyle, $aText)
  {
    $this->x = $aX;
    $this->y = $aY;
    $this->dx = $aDx;
    $this->dy = $aDy;
    $this->style = $aStyle;
    $this->text = $aText;
  }

  //------------------------
  // INTERFACE
  //------------------------

  public function setX($aX)
  {
    $wasSet = false;
    $this->x = $aX;
    $wasSet = true;
    return $wasSet;
  }

  public function setY($aY)
  {
    $wasSet = false;
    $this->y = $aY;
    $wasSet = true;
    return $wasSet;
  }

  public function setDx($aDx)
  {
    $wasSet = false;
    $this->dx = $aDx;
    $wasSet = true;
    return $wasSet;
  }

  public function setDy($aDy)
  {
    $wasSet = false;
    $this->dy = $aDy;
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

  public function getX()
  {
    return $this->x;
  }

  public function getY()
  {
    return $this->y;
  }

  public function getDx()
  {
    return $this->dx;
  }

  public function getDy()
  {
    return $this->dy;
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
    echo "<text x='".$this->getX()."' y='".$this->getY()."' dx='".$this->getDx()."'  
    dy='".$this->getDy()."' style='".$this->getStyle()."' >".$this->getText()."</text>";
  }  
  
  public function open()
  {
    echo "<text x='".$this->getX()."' y='".$this->getY()."' dx='".$this->getDx()."'  
    dy='".$this->getDy()."' style='".$this->getStyle()."' >".$this->getText();
  }

   public function close()
  {
    echo "</text>";
  }

}
?>