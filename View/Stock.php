<div class="row">


<h2>Stock Page</h2>
<form action="../Stock/createStock" method="post">
  <select name="product" class="browser-default">
    <?php
      foreach ($result[1] as $object)
      {
        echo "<option value='$object->productId'>$object->productName</option>";
      }
        ?>
  </select>
  <select name="location" class="browser-default">
    <?php
      foreach ($result[2] as $object)
      {
        echo "<option value='$object->locationId'>$object->locationName</option>";
      }
        ?>
  </select>
  <input type="text" name="amountInStock" placeholder="Amount..">
  <input type="submit" value="Insert into database">
</form>
<form action="../Stock/showAllSearched" method="post">
  <input placeholder="Search in locations and products" id="search" type="text" name="search" class="validate">
    <input type="submit" value="Search database">
</form>

<table class="striped" style="background-color:grey;color:white">
<tr>
  <td>Location ID</td>
  <td>Product ID</td>
  <td>Amount in stock</td>
  <td>Product Name</td>
  <td>Product Price</td>
  <td>Location Name</td>
  <td>Delete</td>
  <td>Edit</td>
</tr>
<?php

foreach ($result[0] as $object) {
  echo "<tr>";

    echo "<td>".$object->locationId ."</td>";
    echo "<td>".$object->productId."</td>";
    echo "<td>".$object->amountInStock."</td>";
    echo "<td>".$object->productName."</td>";
    echo "<td>€ ".str_replace(".",",",$object->productPrice)."</td>";
    echo "<td>".$object->locationName."</td>";
    echo "<td><a style='color:white;' href=../Stock/deleteStock/".$object->productId.'/'.$object->locationId.">Delete</a></td>";
    echo "<td><a style='color:white;' href=../Stock/loadEditStock/".$object->productId.'/'.$object->locationId.'/'.$object->amountInStock.">Edit</a></td>";
    echo "</tr>";
}

 ?>
</table>
</div>
