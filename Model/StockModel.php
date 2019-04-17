<?php
/**
 *
 */
class StockModel
{
  private $dataMaster;

  function __construct()
  {
      $this->dataMaster = new DataMaster();
  }

  public function fetchAll()
  {
    $sql = "SELECT * FROM stock NATURAL JOIN products NATURAL JOIN locations";
    return $this->dataMaster->execAndFetch($sql);
  }

  public function fetchSearched($searchParam)
  {
    $sql = "SELECT * FROM stock NATURAL JOIN products NATURAL JOIN locations WHERE `productName` LIKE '%$searchParam%' OR `locationName` LIKE '%$searchParam%'";
    return $this->dataMaster->execAndFetch($sql);
  }

  public function fetchLocationsAndProducts()
  {
    $sql = "SELECT productName,productId FROM products";
    $sql2 = "SELECT locationName,locationId FROM locations";

    $result = $this->dataMaster->execAndFetch($sql);
    $result2 = $this->dataMaster->execAndFetch($sql2);

    return array($result,$result2);
  }

  public function submitStock($amountInStockParam,$locationParam,$productParam)
  {
    $sql = "INSERT INTO stock VALUES ($amountInStockParam,$locationParam,$productParam)";
    return $this->dataMaster->execOnly($sql);
  }

  public function deleteStock($locationParam,$productParam)
  {
    $sql = "DELETE FROM stock WHERE locationId = $locationParam AND productId = $productParam";
    return $this->dataMaster->execOnly($sql);
  }

  public function editStock($productParam,$locationParam,$stockParam)
  {
    $sql = "UPDATE stock SET amountInStock=$stockParam WHERE productId=$productParam AND locationId=$locationParam";
    vd($sql);
    return $this->dataMaster->execOnly($sql);
  }
}

 ?>
