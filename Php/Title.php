<?php
/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.30.2.5248.dba0a5744 modeling language!*/

class Title
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //Title Attributes
  private $title;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct($aTitle)
  {
    $this->title = $aTitle;
  }

  //------------------------
  // INTERFACE
  //------------------------

  public function setTitle($aTitle)
  {
    $wasSet = false;
    $this->title = $aTitle;
    $wasSet = true;
    return $wasSet;
  }

  public function getTitle()
  {
    return $this->title;
  }

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {}
  
  public function draw()
  {
    echo "<title>".$this->getTitle()."</title>";
  }  

}
?>