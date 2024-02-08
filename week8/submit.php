<?php
$servername = "localhost";
$username = "webprogmi222_sf221";
$password = "xE*Y2nleNVvZm[!!";
$dbname = "webprogmi222_sf221";

// Retrieve form data
$firstname = $_POST['fname'] ?? '';
$lastname = $_POST['lname'] ?? '';
$email = $_POST['email'] ?? '';
$subject = $_POST['subject'] ?? '';
$message = $_POST['message'] ?? '';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO jlgarcia2_myguests (firstname, lastname, email, subject, message)
VALUES ('$firstname', '$lastname', '$email', '$subject', '$message')";


if ($conn->query($sql) === TRUE) {
  header('Location: index.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
