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
$mid = mysqli_real_escape_string($conn, $_POST['patient_name']);

$a = mysqli_real_escape_string($conn, $_POST['ap_date']);
$c= mysqli_real_escape_string($conn, $_POST['ap_time']);



$sql = "INSERT INTO dr_schedule (dr_id,patient_name,ap_date,ap_time) VALUES ($mname,'$mid','$a','$c')";

if($conn->query($sql) === TRUE){
echo "Record Added Sucessfully";
}
else
{
echo "Error" . $sql . "<br/>" . $conn->error;
}
$conn->close();
?>

