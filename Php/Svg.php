<?php
/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.30.2.5248.dba0a5744 modeling language!*/

class Svg
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //Svg Attributes
  private $width;
  private $height;
  private $viewBox;
  private $xmlns;
  private $style;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct($aWidth, $aHeight, $aViewBox, $aXmlns="http://www.w3.org/2000/svg", 
  $aStyle="fill:none;")
  {
    $this->width = $aWidth;
    $this->height = $aHeight;
    $this->viewBox = $aViewBox;
    $this->xmlns = $aXmlns;
    $this->style = $aStyle;
  }

  //------------------------
  // INTERFACE
  //------------------------

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

  public function setViewBox($aViewBox)
  {
    $wasSet = false;
    $this->viewBox = $aViewBox;
    $wasSet = true;
    return $wasSet;
  }

  public function setXmlns($aXmlns)
  {
    $wasSet = false;
    $this->xmlns = $aXmlns;
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

  public function getWidth()
  {
    return $this->width;
  }

  public function getHeight()
  {
    return $this->height;
  }

  public function getViewBox()
  {
    return $this->viewBox;
  }

  public function getXmlns()
  {
    return $this->xmlns;
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
    echo "<svg width='".$this->getWidth()."' height='".$this->getHeight()."' viewBox='".$this->getViewBox()."'  
    xmlns='".$this->getXmlns()."' style='".$this->getStyle()."' >";
  }

   public function close()
  {
    echo "</svg>";
  }

}
?>