<form action="/php/MVCBoilerPlate/Stock/editStock" method="post">
  <input type="text" name="product" value="<?php echo $result[0] ?>" hidden >
  <input type="text" name="location" value="<?php echo $result[1] ?>" hidden>
  <label>Amount in stock</label>
  <input type="NUMBER" name="amountInStock" value="<?php echo $result[2] ?>">
  <input type="submit" value="Edit!">
</form>
