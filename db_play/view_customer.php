<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Customer Data</title>
</head>
<body>
    <h1>Customer Info</h1>
    <?php
        if($_SERVER['REQUEST_METHOD'] == 'GET') {
            $problem=FALSE;
            if(!empty($_GET['KNr'])) {
                $KNr=trim(strip_tags($_GET['KNr']));
            }
            else {
                echo "Please submit all info properly";
            }
        }
        if(!$problem) {
            $servername = "localhost";
            $username = "php";
            $password = "test123";
            $db = "hobbyhuset";
            $conn = new mysqli($servername, $username, $password,$db);

            if(isset($_GET['view'])) {
                $query="SELECT * FROM kunde WHERE KNr=$KNr";
                
                if($result=mysqli_query($conn,$query)) {
                    while ($row=mysqli_fetch_array($result))
                        echo $row['Fornavn'] . " " . $row['Etternavn'];
                }
            }
        }
    ?>
    <form action="view_customer.php" method="GET">
        <p>Enter KNr:</p>
        <input type="text" name="KNr">
        <input type="submit" name="view" value="Submit">
    </form>
</body>
</html>