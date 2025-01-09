<?php
$database = new mysqli('localhost', 'root', '', 'edoc'); // Ensure this matches your credentials

// Check for connection errors
if ($database->connect_error) {
    die("Connection failed: " . $database->connect_error);
} else {
    echo "Database connection successful!";
}
?>
