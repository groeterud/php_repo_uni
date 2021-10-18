<?php

//if/else
if ($totalqty == 0) {
    echo "You did not order any products";
} else {
    if ($tireqty > 0) {
        echo htmlspecialchars($tireqty). ' tires </br>';
    }
    if ($oilqty > 0) {
        echo htmlspecialchars($oilqty). ' bottles of oil </br>';
    }
    if ($sparkqty > 0) {
        echo htmlspecialchars($sparkqty).' spark plugs </br>';
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bob's Auto Parts - Order Form</title>
</head>
<body>
    <h1>Please order your purchase here</h1>
    <form action="./ProcessOrder.php" method="GET">
        <table style="border: 0px;">
            <tr style="background:#cccccc;">
                <td style="width: 150px; text-align: center;">Item</td>
				<td style="width: 15px; text-align: center;">Quantity</td>
            </tr>
            <tr>
                <td>Tires</td>
                <td><input type="text" name="tireqty" size="5" maxlength="3" /></td>
           </tr>
           <tr>
                <td>Oil</td>
                <td><input type="text" name="oilqty" size="5" maxlength="3" /></td>
           </tr>
           <tr>
                <td>Spark Plugs</td>
                <td><input type="text" name="sparkqty" size="5" maxlength="3" /></td>
           </tr>			
           <tr>
                <td colspan="2" style="text-align: center; float: right; margin-top: 0.5em;"><input type="submit" value="Submit Order" /></td>
           </tr>
        </table>
    </form>
</body>
</html>