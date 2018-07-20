<?php
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "dbms";

$conn = new mysqli($server, $user, $pass, $dbname);

if($conn->connect_error){
die("Connection failed:" . $conn->connect_error);
}
$mname = mysqli_real_escape_string($conn, $_POST['pid']);


$rr="---------";

$sql = "select pid,docid,disease,diagnosis,mid from patients_disease where pid='$mname'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["pid"].$rr." -docid: " . $row["docid"].$rr." -disease: " . $row["disease"] .$rr. " -diagnosis: " . $row["diagnosis"].$rr." -mid: " . $row["mid"].$rr.  "<br>";
    }
} else {
    echo "0 results";
}
?>