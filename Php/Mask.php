<?php
/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.30.2.5248.dba0a5744 modeling language!*/

class Mask
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //Mask Attributes
  private $id;
  private $x;
  private $y;
  private $width;
  private $height;
  private $style;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct($aId, $aX, $aY, $aWidth, $aHeight, $aStyle)
  {
    $this->id = $aId;
    $this->x = $aX;
    $this->y = $aY;
    $this->width = $aWidth;
    $this->height = $aHeight;
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

  public function setWidth($aWidth)
  {
    $wasSet = false;
    $this->width = $aWidth;
    $wasSet = true;
    return $wasSet;
  }

  public function setHeight($aHeight)
  {
    $wasSet = false;
    $this->height = $aHeight;
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

  public function getX()
  {
    return $this->x;
  }

  public function getY()
  {
    return $this->y;
  }

  public function getWidth()
  {
    return $this->width;
  }

  public function getHeight()
  {
    return $this->height;
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
    echo "<mask id='".$this->getId()."' x='".$this->getX()."' y='".$this->getY()."'
    width='".$this->getWidth()."' height='".$this->getHeight()."'
    style='".$this->getStyle()."' >";
  }

   public function close()
  {
    echo "</mask>";
  }

}
?>