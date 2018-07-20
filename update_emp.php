<?php
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "dbms";

//Creating connection for mysqli

$conn = new mysqli($server, $user, $pass, $dbname);



// Create connection
$user = mysqli_real_escape_string($conn, $_POST['eid']);
$pass = mysqli_real_escape_string($conn, $_POST['ename']);

$w=mysqli_real_escape_string($conn, $_POST['p']);
$rr="-------";

// Create connection

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "update employee set $user=$pass where eid=$w";
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
