<?php

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
$conn = mysqli_connect("localhost", "root", "", "contacts") or die("connection failed");
$sql = "INSERT INTO contacts-data(name, message,email,) VALUES ('{$name}','{$email}','{$message}' )";
$result = mysqli_query($conn, $sql) or die("Query Failed!");
header("location: http://localhost/database%20form/contactfrom.php");
mysqli_close($conn);
?>