<?php
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "dbms";

$conn = new mysqli($server, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$mname = mysqli_real_escape_string($conn, $_POST['eid']);
$rr="------";
$sql = "select salary,eid from salary where eid='$mname'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "eid: " . $row["eid"].$rr." - salary: " . $row["salary"].$rr. "<br>";
        
    }
} else {
    echo "0 results";
}



$conn->close();
?>