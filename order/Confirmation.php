<?php
    include './ProcessOrder.php';
    ob_end_clean()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
</head>
<body>
    <h1>Thank you for your order</h1>
    <?php
        echo "<p> Your order is as follows: </p>";
		echo htmlspecialchars ($tireqty)." tires <br>";
		echo htmlspecialchars ($oilqty)." bottles of oil <br>";
		echo htmlspecialchars ($sparkqty)." spark plugs <br>";
    ?>
</body>
</html>