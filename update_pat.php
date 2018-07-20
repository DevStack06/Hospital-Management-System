<?php
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "dbms";

//Creating connection for mysqli

$conn = new mysqli($server, $user, $pass, $dbname);



// Create connection
$user = mysqli_real_escape_string($conn, $_POST['pid']);
$pass = mysqli_real_escape_string($conn, $_POST['pname']);

$w=mysqli_real_escape_string($conn, $_POST['p']);
$rr="-------";

// Create connection

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "update patient set $user=$pass where pid=$w";
$result = $conn->query($sql);

if($conn->query($sql) === TRUE){
echo "Record updated Sucessfully";
}
else
{
echo "Error" . $sql . "<br/>" . $conn->error;
}
$conn->close();
?>
