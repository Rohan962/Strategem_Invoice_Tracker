<?php
// Database connection
$servername = "localhost";
$username   = "root";   // change if different
$password   = "";       // change if you set a password
$dbname     = "invoice_mgmt_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
