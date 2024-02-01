<?php
// Database connection parameters
$hostname = "localhost";
$username = "root";
$password = "";
$database = "sfdss-enrollees";

// Create a connection to the database
$conn = new mysqli($hostname, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$lastName = $_POST['lastName'];
$firstName = $_POST['firstName'];

// Insert data into the database
$sql = "INSERT INTO kinder (lastName, firstName) VALUES ('$lastName', '$firstName')";

if ($conn->query($sql) === TRUE) {
    echo "Record added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
