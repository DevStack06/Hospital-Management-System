<?php
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "dbms";

$conn = new mysqli($server, $user, $pass, $dbname);

if($conn->connect_error){
die("Connection failed:" . $conn->connect_error);
}

$mname = mysqli_real_escape_string($conn, $_POST['id']);
$mid = mysqli_real_escape_string($conn, $_POST['iname']);
$q = mysqli_real_escape_string($conn, $_POST['stock']);




$sql = "INSERT INTO lab (ins_id,insname,stock) VALUES ('$mname','$mid','$q')";

if($conn->query($sql) === TRUE){
echo "Record Added Sucessfully";
}
else
{
echo "Error" . $sql . "<br/>" . $conn->error;
}
$conn->close();
?>