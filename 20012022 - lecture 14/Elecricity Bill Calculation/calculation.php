<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electricity Bill Calculation</title>
</head>
<?php
$result_str = $result = '';
if (isset($_POST['unit-submit'])) {
    $units = $_POST['units'];
    if (!empty($units)) {
        $result = calculate_bill($units);
        $result_str = 'Total amount of cost is ' . $result.' NOK '. 'for '.$units . 'units of electricity usage';
    }
}
function calculate_bill($units): float {
    $total=0.00;
    $total_50=50*3.50;
    $total_100=$total_50+(100*4.00);
    $total_200=$total_100+(100*5.20);
    if ($units >200) {
        $units_subtr=$units-200;
        $total=$total_200+($units_subtr*6.50);
    }
    else if ($units >100) {
        $units_subtr=$units-50;
        $total=$total_100+($units_subtr*5.20);
    }
    else if ($units >50) {
        $units_subtr=$units-50;
        $total=$total_50+($units_subtr*4.00);
    }
    else {
        $total=$units*3.50;
    }

    return $total;
}
?>
<body>
    <div id="page-wrap">
        <h1>Electricity Bill Calculation</h1>
        <form action="" id="quiz-form" method="post">
            <input type="number" name="units" id="units" placeholder="Please enter total units" />
            <input type="submit" name="unit-submit" id="unit-submit" value="Submit" />
        </form>
    </div>
    <div> 
        <?php echo '<br />' . $result_str; ?>
    </div>
</body>
</html>