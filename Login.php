<?php

// Get form data
$email = $_POST['email'];
$password = $_POST['pass'];

// Database connection
$conn = new mysqli('localhost:3307', 'root', '', 'test');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    // Prepare the SQL statement
    $stmt = $conn->prepare("SELECT * FROM registration WHERE email = ?");
    $stmt->bind_param("s", $email);

    // Execute the statement
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        // Fetch the row
        $row = $result->fetch_assoc();

        // Check if the password matches
        if ($password === $row['password']) {
            // Login successful
            session_start(); // Start the session if not already started
            $_SESSION['email'] = $row['email']; // Store email in session for future use

            // Redirect to the main page
            header("Location: index.php");
            exit;
        }
    }

    // Invalid credentials or user not found
    echo "Invalid email or password";
    header("Refresh: 3; url=GDRLogin.html");
    exit;
}
?>