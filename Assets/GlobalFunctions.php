<?php

// function head($headTo)
// {
//   $base = APPDIR;
//   header("Location: ".$base.$headTo." ");
// }
function renderView($viewToRender,$arrayToExtract){

  $result=$arrayToExtract;
  include_once "View/".$viewToRender.".php";
}

  function vd($varToDump)
  {
    echo "<pre>";
    var_dump($varToDump);
    echo "</pre>";
  }
 ?>
