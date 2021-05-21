<?php
/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.30.2.5248.dba0a5744 modeling language!*/

class Marker
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //Marker Attributes
  private $id;
  private $refX;
  private $refY;
  private $markerWidth;
  private $markerHeight;
  private $orient;
  private $style;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct($aId, $aRefX, $aRefY, $aMarkerWidth, $aMarkerHeight, $aOrient, $aStyle)
  {
    $this->id = $aId;
    $this->refX = $aRefX;
    $this->refY = $aRefY;
    $this->markerWidth = $aMarkerWidth;
    $this->markerHeight = $aMarkerHeight;
    $this->orient = $aOrient;
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

  public function setRefX($aRefX)
  {
    $wasSet = false;
    $this->refX = $aRefX;
    $wasSet = true;
    return $wasSet;
  }

  public function setRefY($aRefY)
  {
    $wasSet = false;
    $this->refY = $aRefY;
    $wasSet = true;
    return $wasSet;
  }

  public function setMarkerWidth($aMarkerWidth)
  {
    $wasSet = false;
    $this->markerWidth = $aMarkerWidth;
    $wasSet = true;
    return $wasSet;
  }

  public function setMarkerHeight($aMarkerHeight)
  {
    $wasSet = false;
    $this->markerHeight = $aMarkerHeight;
    $wasSet = true;
    return $wasSet;
  }

  public function setOrient($aOrient)
  {
    $wasSet = false;
    $this->orient = $aOrient;
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

  public function getRefX()
  {
    return $this->refX;
  }

  public function getRefY()
  {
    return $this->refY;
  }

  public function getMarkerWidth()
  {
    return $this->markerWidth;
  }

  public function getMarkerHeight()
  {
    return $this->markerHeight;
  }

  public function getOrient()
  {
    return $this->orient;
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
    echo "<marker id='".$this->getId()."' refX='".$this->getRefX()."' refY='".$this->getRefY()."'
    markerWidth='".$this->getMarkerWidth()."' markerHeight='".$this->getMarkerHeight()."'
    orient='".$this->getOrient()."' style='".$this->getStyle()."' >";
  }

   public function close()
  {
    echo "</marker>";
  }

}
?>