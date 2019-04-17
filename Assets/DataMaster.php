<?php

/**
 *
 */
class DataMaster
{
  private $conn;

  function __construct()
  {
    $this->conn = new PDO(DSN,USER,PASS);
  }

  public function execOnly($sql)
  {
    $stmt = $this->conn->prepare($sql);
    $stmt->execute();
    return true;
  }
  public function execAndFetch($sql)
  {
    $stmt = $this->conn->prepare($sql);
    $stmt->execute();
    return $result = $stmt->fetchAll(PDO::FETCH_OBJ);
  }
}


 ?>
