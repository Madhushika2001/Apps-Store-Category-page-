
<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$db="category"; //database name 


// Create connection
$conn = new mysqli($servername, $username, $password,$db);//$conn is a connection object of database

// Check connection
if ($conn->connect_error) 
{
	die("Connection failed: " . $conn->connect_error);
	echo "<script>alert('Conection lost');</script>";
}
else
{
	echo "<script>alert('Connection successfull');</script>";

}

?>