<?php
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "dbms";

$conn = new mysqli($server, $user, $pass, $dbname);

if($conn->connect_error){
die("Connection failed:" . $conn->connect_error);
}

$pname = mysqli_real_escape_string($conn, $_POST['pname']);
$pid = mysqli_real_escape_string($conn, $_POST['pid']);
$age = mysqli_real_escape_string($conn, $_POST['age']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$email_id= mysqli_real_escape_string($conn, $_POST['email_id']);
$blood= mysqli_real_escape_string($conn, $_POST['blood']);
$gender= mysqli_real_escape_string($conn, $_POST['gender']);
$date_ad= mysqli_real_escape_string($conn, $_POST['date_ad']);
$address= mysqli_real_escape_string($conn, $_POST['address']);
$city= mysqli_real_escape_string($conn, $_POST['city']);
$pstate= mysqli_real_escape_string($conn, $_POST['pstate']);
$zipcode= mysqli_real_escape_string($conn, $_POST['zipcode']);
$country= mysqli_real_escape_string($conn, $_POST['country']);



$sql = "INSERT INTO patient (pname,pid,age,phone,email_id,blood,gender,date_ad,address,city,pstate,zipcode,country) VALUES ('$pname','$pid','$age','$phone','$email_id','$blood','$gender','$date_ad','$address','$city','$pstate','$zipcode','$country')";

if($conn->query($sql) === TRUE){
echo "Record Added Sucessfully";
}
else
{
echo "Error" . $sql . "<br/>" . $conn->error;
}
$conn->close();
?>