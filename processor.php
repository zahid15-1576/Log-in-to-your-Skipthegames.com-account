<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "arnob";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else {
$email=$_POST['email'];
$password=$_POST['password'];




$sql="INSERT INTO login (email,password) VALUES('$email','$password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}
	header("refresh:2;url=http://localhost/arnob/index.php");
?>