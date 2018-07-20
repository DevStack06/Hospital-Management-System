<?php
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "dbms";

$conn = new mysqli($server, $user, $pass, $dbname);

if($conn->connect_error){
die("Connection failed:" . $conn->connect_error);
}



$rr="---------";

$sql = "select insname,ins_id,stock from lab where 1";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["ins_id"].$rr." -stock: " . $row["stock"].$rr." -insname: " . $row["insname"] .$rr.  "<br>";
    }
} else {
    echo "0 results";
}
?>