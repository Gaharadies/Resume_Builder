<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="resume";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$stmt = $conn->prepare("INSERT INTO logint (una, pas) VALUES (?,?)");
$stmt->bind_param("ss",$u,$p);
$u=$_POST['un'];
$p=$_POST['ups'];
$stmt->execute();
$stmt->close();
$conn->close();
?>