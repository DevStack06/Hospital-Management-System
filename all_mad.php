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

$sql = "SELECT  mname,mid,quantity,avaible FROM medicine where 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "mid: " . $row["mid"].$rr." - Name: " . $row["mname"].$rr." - quantity: " . $row["quantity"] .$rr. " - aviailbility: " . $row["avaible"].$rr. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>