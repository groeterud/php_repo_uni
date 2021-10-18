<?php
$numbers = array(7,6,5,4,3,2,1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        foreach($numbers as $value) {
            echo "<p style='font-size:1.75rem;'> ArrayValues are: ".$value."</br> </p>";
        }   
    ?>
</body>
</html>