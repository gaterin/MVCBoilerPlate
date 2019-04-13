<?php

function renderView($viewToRender,$arrayToExtract=[]){

  extract($arrayToExtract);
  include_once "View/".$viewToRender.".php";
}

  function vd($varToDump)
  {
    echo "<pre>";
    var_dump($varToDump);
    echo "</pre>";
  }
 ?>
