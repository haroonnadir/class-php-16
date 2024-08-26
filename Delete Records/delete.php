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
// Get the ID from the AJAX request
$id = $_POST['id'];
// Prepare and bind
$stmt = $conn->prepare("DELETE FROM your_table_name WHERE id = ?");
$stmt->bind_param("i", $id);
// Execute the statement and check for errors
if ($stmt->execute()) {
    echo "Record deleted successfully";
} else {
    echo "Error: " . $stmt->error;
}
// Close connections
$stmt->close();
$conn->close();
?>
