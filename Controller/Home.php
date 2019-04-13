<?php

/**
 *
 */
class Home
{

  function __construct(){}

  public function showHome($param1){
    renderView("Home",['param1'=>$param1]);
  }
}


 ?>
