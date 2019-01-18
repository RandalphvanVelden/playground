<?php

$productId= $_GET['productid'];

?>


<form action="dbproductaanpassen.php" method="POST">
    <input name="productnaam" placeholder="product naam">
    <input name="productprijs" placeholder="product prijs">
    <input name="productid" placeholder="product id" value = "<?php echo $productId; ?>">
    <button type="submit">UPDATE</button>

</form>