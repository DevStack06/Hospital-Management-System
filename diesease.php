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
$mid = mysqli_real_escape_string($conn, $_POST['docid']);
$q = mysqli_real_escape_string($conn, $_POST['disease']);
$a = mysqli_real_escape_string($conn, $_POST['diagnosis']);
$c= mysqli_real_escape_string($conn, $_POST['mid']);



$sql = "INSERT INTO patients_disease (pid,docid,disease,diagnosis,mid) VALUES ('$mname','$mid','$q','$a','$c')";

if($conn->query($sql) === TRUE){
echo "Record Added Sucessfully";
}
else
{
echo "Error" . $sql . "<br/>" . $conn->error;
}
$conn->close();
?>