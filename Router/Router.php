<?php

/**
 *Main router class
 */
class Router
{
  private $controllerFilePath;
  private $controller;
  private $method;
  private $params = [];

  function __construct()
  {
    $uri = $_SERVER['REQUEST_URI'];
    $filteredInput = $this->filterInput($uri);
    $determinedDestination = $this->determinedDestination($filteredInput);
    $this->sendToDestination();
  }

  private function filterInput($uri)
  {
       return array_slice(explode("/",$uri),3);
  }

  private function determinedDestination($filteredInput) {

      $this->controller = array_shift($filteredInput);
      $this->method = array_shift($filteredInput);
      $this->params = $filteredInput;
      $this->controllerFilePath = "Controller/". ucfirst($this->controller) . ".php";

      if (!file_exists($this->controllerFilePath)){
        $this->controller = "Home";
        $this->method = "showHome";
        $this->params = "";
        $this->controllerFilePath = "Controller/Home.php";
      }

  }

  private function sendToDestination()
  {
    include $this->controllerFilePath;
    $controller = new $this->controller();
    $method = $this->method;
    $controller->$method($this->params);
  }


}



?>
