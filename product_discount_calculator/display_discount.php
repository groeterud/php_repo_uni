<?php
$product_descr=$_POST['product_descr'];

$list_price=$_POST['list_price'];

$disc_pct=$_POST['discount_percent'];

$disc_amt=$list_price*$disc_pct/100;

$disc_price=$list_price-$disc_amt;

$list_price=number_format($list_price,2);
$disc_amt=number_format($disc_amt,2);
$disc_price=number_format($disc_price,2);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Product Discount Calculator</title>
</head>
<body>
    <main style="padding-bottom: 8em;">
    <h1>Product Discount Calculator</h1>
    <?php
        echo "<label> Product Description</label>";
        echo "<label> ", htmlspecialchars($product_descr), "</label>";
        echo "<label> List Price</label>";
        echo "<label>$", htmlspecialchars($list_price),"</label>";
        echo "<label>Standard Discount</label>";
        echo "<label>",htmlspecialchars($disc_pct),"%</label>";
        echo "<label>Discount Amount</label>";
        echo "<label>$",htmlspecialchars($disc_amt),"</label>";
        echo "<label>Discount Price</label>";
        echo "<label>$",htmlspecialchars($disc_price),"</label>";

    ?>
    </main>
</body>
</html>