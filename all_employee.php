<?php
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "dbms";

//Creating connection for mysqli

$conn = new mysqli($server, $user, $pass, $dbname);
$rr="----";


// Create connection

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT  ename, eid, age,phone,email_id,blood,gender, date_j, address,city,zipcode,estate,status FROM employee where 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["eid"].$rr." - Name: " . $row["ename"].$rr." - gender: " . $row["gender"] .$rr. " - date_j: " . $row["date_j"].$rr. " - blood: " . $row["blood"] .$rr. " - address: " . $row["address"] .$rr. " - city: " . $row["city"] . " - zipcode: " . $row["zipcode"] . " - estate: " . $row["estate"] ." - status: " . $row["status"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>