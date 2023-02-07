<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testing";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connedction failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM customer";
$result = $conn->query($sql);

if ($result->num_rows >0) {
  while ($row=$result->fetch_assoc()) {
        echo "Id: {$row["id"]}- Name:{$row["name"]} - Phone:{$row["phone"]} - Age:{$row["age"]} \n";
  }  
}
else {
    echo "No Result Found!";
}
$conn->close();
?>