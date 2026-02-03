<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "login_demo";

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// When form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $password = $_POST['password']; // Storing raw password

    $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    
    // FIX: Added $password here so it matches the "ss" (String, String) definition
    $stmt->bind_param("ss", $username, $password);

    if ($stmt->execute()) {
        echo "Data saved successfully ✅";
    } else {
        echo "Error: " . $stmt->error . " ❌";
    }

    $stmt->close();
}

$conn->close();
?>