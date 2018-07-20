<?php
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "dbms";

$conn = new mysqli($server, $user, $pass, $dbname);

if($conn->connect_error){
die("Connection failed:" . $conn->connect_error);
}

$mname = mysqli_real_escape_string($conn, $_POST['mname']);
$mid = mysqli_real_escape_string($conn, $_POST['mid']);
$q = mysqli_real_escape_string($conn, $_POST['quantity']);
$a = mysqli_real_escape_string($conn, $_POST['avaible']);



$sql = "INSERT INTO medicine (mname,mid,quantity,avaible) VALUES ('$mname','$mid','$q','$a')";

if($conn->query($sql) === TRUE){
echo "Record Added Sucessfully";
}
else
{
echo "Error" . $sql . "<br/>" . $conn->error;
}
$conn->close();
?>