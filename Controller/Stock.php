<?php
/**
 *
 */
class Stock
{
  public $model;
  public $locationsAndProductsArray;

  function __construct(){
    $this->model = new StockModel();
    $this->locationsAndProductsArray = $this->model->fetchLocationsAndProducts();
  }

    public function showAllStock()
    {
      $resultStock = $this->model->fetchAll();
      $resultProducts= $this->locationsAndProductsArray[0];
      $resultLocations = $this->locationsAndProductsArray[1];
      renderView('Stock',[$resultStock,$resultProducts,$resultLocations]);
    
    }

    public function showAllSearched()
    {

      $resultProducts= $this->locationsAndProductsArray[0];
      $resultLocations = $this->locationsAndProductsArray[1];

      if (isset($_POST["search"])) {
        $searchParam = $_POST["search"];
      }else{
        $searchParam = "";
      }

      $result = $this->model->fetchSearched($searchParam);
      renderView('Stock',[$result,$resultProducts,$resultLocations]);
    }

    public function createStock()
    {
      $amountInStockParam;
      $productParam;
      $locationParam;

      if (isset($_POST["amountInStock"]) && isset($_POST["product"])  && isset($_POST["location"])){
        $amountInStockParam = $_POST["amountInStock"];
        $productParam = $_POST["product"];
        $locationParam = $_POST["location"];
      }

      $this->model->submitStock($amountInStockParam,$locationParam,$productParam);
      header('Location: ../Stock/showAllStock');
    }

    public function deleteStock($params)
    {
      $productParam = $params[0];
      $locationParam = $params[1];
      $this->model->deleteStock($locationParam,$productParam);
      header('Location: ../../../Stock/showAllStock');
    }

    public function loadEditStock($params)
    {
      $productParam = $params[0];
      $locationParam = $params[1];
      $stockParam = $params[2];
      renderView('EditStock',[$productParam,$locationParam,$stockParam]);
    }

    public function editStock()
    {
      $amountInStockParam = $_POST["amountInStock"];
      $productParam = $_POST["product"];
      $locationParam = $_POST["location"];


      $this->model->editStock($productParam,$locationParam,$amountInStockParam);
      // $this->showAllStock();
      header("Location: ../Stock/showAllStock");
    }
}


 ?>
