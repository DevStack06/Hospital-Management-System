<?php
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "dbms";

//Creating connection for mysqli

$conn = new mysqli($server, $user, $pass, $dbname);



// Create connection
$user = mysqli_real_escape_string($conn, $_POST['eid']);
$pass = mysqli_real_escape_string($conn, $_POST['ename']);
$rr="----------------";
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT  ename, eid, age,phone,email_id,blood,gender, date_j, address,city,zipcode,estate FROM employee where ename='$pass' OR eid=$user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["eid"].$rr." - Name: " . $row["ename"].$rr." - gender: " . $row["gender"] .$rr. " - date_j: " . $row["date_j"].$rr. " - blood: " . $row["blood"] .$rr. " - address: " . $row["address"] .$rr. " - city: " . $row["city"] . " - zipcode: " . $row["zipcode"] . " - estate: " . $row["estate"] . "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>