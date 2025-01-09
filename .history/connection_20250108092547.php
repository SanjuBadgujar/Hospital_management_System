<?php
$database = new mysqli("localhost", "root", "Sanju@123", "edoc");

if ($database->connect_error) {
    die("Connection failed: " . $database->connect_error);
} else {
    echo "Database connection successful!";
}
?>
