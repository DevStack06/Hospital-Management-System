<?php
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "dbms";

$conn = new mysqli($server, $user, $pass, $dbname);

if($conn->connect_error){
die("Connection failed:" . $conn->connect_error);
}

$pp = mysqli_real_escape_string($conn, $_POST['ename']);
$eid = mysqli_real_escape_string($conn, $_POST['eid']);
$age = mysqli_real_escape_string($conn, $_POST['age']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$email_id= mysqli_real_escape_string($conn, $_POST['email_id']);
$blood= mysqli_real_escape_string($conn, $_POST['blood']);
$gender= mysqli_real_escape_string($conn, $_POST['gender']);
$date_j= mysqli_real_escape_string($conn, $_POST['date_j']);
$address= mysqli_real_escape_string($conn, $_POST['address']);
$city= mysqli_real_escape_string($conn, $_POST['city']);
$estate= mysqli_real_escape_string($conn, $_POST['estate']);
$zipcode= mysqli_real_escape_string($conn, $_POST['zipcode']);
$country= mysqli_real_escape_string($conn, $_POST['country']);
$c= mysqli_real_escape_string($conn, $_POST['status']);



$sql = "INSERT INTO employee (ename,eid,age,phone,email_id,blood,gender,date_j,address,city,estate,zipcode,country,status) VALUES ('$pp','$eid','$age','$phone','$email_id','$blood','$gender','$date_j','$address','$city','$estate','$zipcode','$country','$c')";

if($conn->query($sql) === TRUE){
echo "Record Added Sucessfully";
}
else
{
echo "Error" . $sql . "<br/>" . $conn->error;
}
$conn->close();
?>