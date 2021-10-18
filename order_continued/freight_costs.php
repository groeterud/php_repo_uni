<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freigt Costs</title>
</head>
<body>
    <table style="border: 0px; padding: 3px">
    <tr>
        <td style="background: #cccccc; text-align: center;">Distance</td>
        <td style="background: #cccccc; text-align: center;">Cost</td>
    </tr>
    <?php
    /* Option 1
    $distance=50;
    while ($distance <=250) {
        echo'<tr>
            <td style="text-align: right;">'.$distance.'</td>
            <td style="text-align: right;">'.($distance /10).'</td>
        </tr>';
        $distance+=50;
    } */
    // Option 2
    for ($distance=50; $distance<=250; $distance+=50) {
        echo'<tr>
        <td style="text-align: right;">'.$distance.'</td>
        <td style="text-align: right;">'.($distance /10).'</td>
    </tr>';
    }
    ?>
    </table>
</body>
</html>