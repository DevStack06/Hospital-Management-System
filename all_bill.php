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

$sql = "select  p_id,bill from bill where 1";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["p_id"].$rr." -bill: " . $row["bill"].$rr."<br>";
    }
} else {
    echo "0 results";
}
?>