<?php
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "dbms";

//Creating connection for mysqli

$conn = new mysqli($server, $user, $pass, $dbname);



// Create connection
$user = mysqli_real_escape_string($conn, $_POST['pid']);
$pass = mysqli_real_escape_string($conn, $_POST['pname']);


$rr="-------";

// Create connection

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT  pname, pid, age,phone,email_id,blood,gender, date_ad, address,city FROM patient where pname='$pass' and pid='$user'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["pid"].$rr." - Name: " . $row["pname"].$rr." - gender: " . $row["gender"] .$rr. " - date_ad: " . $row["date_ad"].$rr. " - blood: " . $row["blood"] .$rr. " - address: " . $row["address"] .$rr. " - city: " . $row["city"] . "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
?>