<?php
/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.30.2.5248.dba0a5744 modeling language!*/

class Image
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //Image Attributes
  private $x;
  private $y;
  private $width;
  private $height;
  private $href;
  private $style;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct($aX, $aY, $aWidth, $aHeight, $aHref, $aStyle)
  {
    $this->x = $aX;
    $this->y = $aY;
    $this->width = $aWidth;
    $this->height = $aHeight;
    $this->href = $aHref;
    $this->style = $aStyle;
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

  public function getHref()
  {
    return $this->href;
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
  
  public function draw()
  {
    echo "<image x='".$this->getX()."' y='".$this->getY()."' width='".$this->getWidth()."'
    height='".$this->getHeight()."' href='".$this->getHref()."' style='".$this->getStyle()."' />";
  }

}
?>