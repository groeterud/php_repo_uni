<?php

$servername = "localhost";
$username = "php";
$password = "test123";
$db = "hobbyhuset";
$port = 33060;

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else {
    $query ='SELECT * FROM kunde';

    $result=mysqli_query($conn,$query);
    
    while ($row=$result->fetch_array()){
        echo $row['Fornavn'] . " " . $row['Etternavn'];
        echo "<br />";
    }
}



?>