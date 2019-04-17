<h2>Locations Page</h2>

<table>

<?php

foreach ($result as $object) {
    echo "<tr>";
    echo "<td>".$object->locationId ."</td>";
    echo "<td>".$object->productId."</td>";
    echo "<td>".$object->amountInStock."</td>";
    echo "<td>".$object->productName."</td>";
    echo "<td>".$object->productPrice."</td>";
    echo "<td>".$object->locationName."</td>";
    echo "</tr>";
}

 ?>
</table>
