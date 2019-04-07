<?php

/**
 *Main router class
 */
class Router
{

  private $controller;
  private $method;
  private $params;

  function __construct()
  {
    $uri = $_SERVER['REQUEST_URI'];
    $filteredInput = $this->filterInput($uri);
  }

  private function filterInput($uri)
  {
       return array_slice(explode("/",$uri),3);
  }
}



?>
