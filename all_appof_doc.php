<?php
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "dbms";

$conn = new mysqli($server, $user, $pass, $dbname);

if($conn->connect_error){
die("Connection failed:" . $conn->connect_error);
}

$mname = mysqli_real_escape_string($conn, $_POST['dr_id']);


$rr="---------";

$sql = "select dr_id,patient_name,ap_date,ap_time from dr_schedule where dr_id='$mname'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["dr_id"].$rr." -patient Name: " . $row["patient_name"].$rr." -date: " . $row["ap_date"] .$rr. " -ap_time: " . $row["ap_time"].$rr.  "<br>";
    }
} else {
    echo "0 results";
}
?>