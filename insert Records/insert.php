<?php
// Database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "your_database_name";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Get the data from AJAX request
$name = $_POST['name'];
$email = $_POST['email'];
// Prepare and bind
$stmt = $conn->prepare("INSERT INTO your_table_name (name, email) VALUES (?, ?)");
$stmt->bind_param("ss", $name, $email);
if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}
// Close connections
$stmt->close();
$conn->close();
?>
