<?php

$productid= $_GET['productid'];
?>


<form action="dbproductaanpassen.php" method="POST">
<input name="productnaam" placeholder="product naam">
    <input name="productprijs" placeholder="product prijs">
    <input name="productid" placeholder="productid" value = "<?php echo $productid; ?>">
    <button type="submit">UPDATE</button>

</form>